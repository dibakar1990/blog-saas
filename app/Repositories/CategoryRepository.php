<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private Category $model
    ){ }
    
    public function getCategoryDatatable($request)
    {
        $data = Category::orderBy('order_by','asc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->setRowAttr([
                    'data-id' => function($row) {
                        return $row->id;
                    },
                ])
                ->addColumn('status', function ($data) {
                    if($data->status == '1'){
                        $categoryStatus = '<span class="badge rounded-pill bg-label-success me-1">Active</span>';
                    }
                    if($data->status == '0'){
                        $categoryStatus = '<span class="badge rounded-pill bg-label-danger me-1">Inactive</span>';
                    }
                    return $categoryStatus;
                })
                ->addColumn('menu_item', function ($data) {
                    if($data->menu_item_set == '1'){
                        $itemSet = '<span class="badge rounded-pill bg-label-success me-1">Yes</span>';
                    }
                    if($data->menu_item_set == '0'){
                        $itemSet = '<span class="badge rounded-pill bg-label-danger me-1">No</span>';
                    }
                    return $itemSet;
                })
                ->addColumn('action', function($data){
                    $editUrl = route('admin.categories.edit',['category' => $data->id]);
                    $showUrl = route('admin.categories.show',['category' => $data->id]);
                    $deleteUrl = route('admin.categories.destroy',['category' => $data->id]);
                    $statusUrl = route('admin.category.status');
                    if($data->status == 1){
                        $status = 'Inactive';
                        $newStatus = 0;
                    }else{
                        $status = 'Active';
                        $newStatus = 1;
                    }
                    $menuItemUrl = route('admin.category.menustatus');
                    if($data->menu_item_set == 1){
                        $menuItemstatus = 'No';
                        $newMenuItemStatus = 0;
                    }else{
                        $menuItemstatus = 'Yes';
                        $newMenuItemStatus = 1;
                    }
                    $actionButton ='<div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item btn-outline-secondary openPopup" data-action-url="'.$showUrl.'" href="javascript:void(0);" data-title="Category Details" title="Category View"><i class="ri-eye-line me-1"></i> View</a>
                            <a class="dropdown-item btn-outline-primary" href="'.$editUrl.'"><i class="ri-pencil-line me-1"></i> Edit</a>
                            <a class="dropdown-item btn-outline-success statusChange" data-id="'.$data->id.'" data-status="'.$status.'" data-new-status="'.$newStatus.'" data-action-url="'.$statusUrl.'" href="javascript:void(0);"><i class="ri-exchange-line me-1"></i> Status</a>
                            <a class="dropdown-item btn-outline-info menuItemStatus" data-id="'.$data->id.'" data-status="'.$menuItemstatus.'" data-new-status="'.$newMenuItemStatus.'" data-action-url="'.$menuItemUrl.'" href="javascript:void(0);"><i class="ri-refresh-line me-1"></i> Menu Set</a>
                            <a class="dropdown-item btn-outline-danger deleteConfirm" data-action-url="'.$deleteUrl.'" href="javascript:void(0);"><i class="ri-delete-bin-6-line me-1"></i> Delete</a>
                          </div>
                        </div>';
                    return $actionButton;
                    
                })
                ->filter(function ($instance) use ($request) {
                    if ($request['status'] == '1' || $request['status'] == '0') {
                        $instance->where('status', $request['status']);
                    }
                    if ($request['menu_iten_set'] == '1' || $request['menu_iten_set'] == '0') {
                        $instance->where('menu_item_set', $request['menu_iten_set']);
                    }

                    if (!empty($request['search'])) {
                        $instance->where(function($q) use($request){
                            $search = $request['search'];
                            $q->orWhere('name', 'LIKE', "%$search%");
                        });
                    }
                })
                ->rawColumns([
                    'action',
                    'status',
                    'menu_item'
                ])
            ->make(true);
    }

    public function getCategory()
    {
        $categories = Cache::remember('categories', 60, function () {
            return $this->model::latest()->get();
        });
        return $categories;
    }

    public function store($data)
    {
        $count = self::CategoryCount();
        $orderBy = $count + 1;
        $category = new $this->model();
        $category->name = $data['category_name'];
        $category->slug = Str::slug($data['category_name']);
        $category->order_by = $orderBy;
        $category->save();
        return $category;
    }

    public function getCategoryByID(string $id)
    {
        $category = Cache::remember('categories_{$id}', 60, function () use ($id) {
            return $this->model::findOrFail($id);
        });
        return $category;
    }

    public function update($data, string $id)
    {
        $category = $this->model::find($id);
        $category->name = $data['category_name'];
        $category->save();
        Cache::forget("categories_{$id}");
        return $category;
    }

    public function destroy(string $id): bool
    {
        $this->model::destroy($id);
        Cache::forget('categories');
        Cache::forget("categories_{$id}");
        return true;
    }

    public function statusUpdate($request):bool
    {
        $category = $this->model::findOrFail($request['id']);
        $category->status = $request['status'];
        $category->save();
        return true;
    }

    public function menuStatusUpdate($request):bool
    {
        $category = $this->model::findOrFail($request['id']);
        $category->menu_item_set = $request['status'];
        $category->save();
        return true;
    }

    public function categoryOrdering($data):bool
    {
        foreach ($data as $index => $id) {
            $this->model::where('id', $id)->update(['order_by' => $index+1]);
        }
        return true;
    }

    public function CategoryCount()
    {
        $count = $this->model::count();
        return $count;
    }

    public function getCategoryID($slug)
    {
        return $this->model::where('slug',$slug)->value('id');
    }
}
