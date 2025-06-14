<?php

namespace App\Repositories;

use App\Interfaces\TagRepositoryInterface;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class TagRepository implements TagRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private Tag $model
    ){ }

    public function getTagDatatable($request)
    {
        $data = $this->model::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                
                ->addColumn('status', function ($data) {
                    if($data->status == '1'){
                        $tagStatus = '<span class="badge rounded-pill bg-label-success me-1">Active</span>';
                    }
                    if($data->status == '0'){
                        $tagStatus = '<span class="badge rounded-pill bg-label-danger me-1">Inactive</span>';
                    }
                    return $tagStatus;
                })
                
                ->addColumn('action', function($data){
                    $editUrl = route('admin.tags.edit',['tag' => $data->id]);
                    $showUrl = route('admin.tags.show',['tag' => $data->id]);
                    $deleteUrl = route('admin.tags.destroy',['tag' => $data->id]);
                    $statusUrl = route('admin.tag.status');
                    if($data->status == 1){
                        $status = 'Inactive';
                        $newStatus = 0;
                    }else{
                        $status = 'Active';
                        $newStatus = 1;
                    }
                    
                    $actionButton ='<div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item btn-outline-secondary openPopup" data-action-url="'.$showUrl.'" href="javascript:void(0);" data-title="Tag Details" title="Tag View"><i class="ri-eye-line me-1"></i> View</a>
                            <a class="dropdown-item btn-outline-primary" href="'.$editUrl.'"><i class="ri-pencil-line me-1"></i> Edit</a>
                            <a class="dropdown-item btn-outline-success statusChange" data-id="'.$data->id.'" data-status="'.$status.'" data-new-status="'.$newStatus.'" data-action-url="'.$statusUrl.'" href="javascript:void(0);"><i class="ri-exchange-line me-1"></i> Status</a>
                            <a class="dropdown-item btn-outline-danger deleteConfirm" data-action-url="'.$deleteUrl.'" href="javascript:void(0);"><i class="ri-delete-bin-6-line me-1"></i> Delete</a>
                          </div>
                        </div>';
                    return $actionButton;
                    
                })
                ->filter(function ($instance) use ($request) {
                    if ($request['status'] == '1' || $request['status'] == '0') {
                        $instance->where('status', $request['status']);
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
                    'status'
                ])
            ->make(true);
    }

    public function getTag()
    {
        return $tags = $this->model::get();
    }

    public function store($data)
    {
        $tag = new $this->model();
        $tag->name = $data['tag_name'];
        $tag->slug = Str::slug($data['tag_name']);
        $tag->save();
        return $tag;
    }

    public function getFindOrFail(string $id)
    {
        $tag = Cache::remember('tags_{$id}', 60, function () use ($id) {
            return $this->model::findOrFail($id);
        });
        return $tag;
    }

    public function update($data, $id):bool
    {
        $tag = $this->model::find($id);
        $tag->name = $data['tag_name'];
        $tag->save();
        return true;
    }

    public function destroy(string $id): bool
    {
        $this->model::destroy($id);
        return true;
    }

    public function status($data):bool
    {
        $tag = $this->model::findOrFail($data['id']);
        $tag->status = $data['status'];
        $tag->save();
        return true;
    }

    public function getTagId($slug)
    {
        $tag = Tag::where('slug',$slug)->where('status',1)->value('id');
        return $tag;
    }
}
