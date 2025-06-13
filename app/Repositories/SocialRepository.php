<?php

namespace App\Repositories;

use App\Interfaces\SocialRepositoryInterface;
use App\Models\Social;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class SocialRepository implements SocialRepositoryInterface
{
    public function __construct(
        private Social $model
    ){ }
    
    public function getSocialDatatable($request)
    {
        $data = Social::orderBy('ordering','asc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->setRowAttr([
                    'data-id' => function($row) {
                        return $row->id;
                    },
                ])
                ->addColumn('social_name', function ($data) {
                        $name = '<a href="'. $data->link.'" target="__blank"><i data-v-38237799="" class="ri-'.$data->icon_name.'-fill"></i> '.$data->name.' </a>';
                   
                    return $name;
                })
                ->addColumn('status', function ($data) {
                    if($data->status == '1'){
                        $socialStatus = '<span class="badge rounded-pill bg-label-success me-1">Active</span>';
                    }
                    if($data->status == '0'){
                        $socialStatus = '<span class="badge rounded-pill bg-label-danger me-1">Inactive</span>';
                    }
                    return $socialStatus;
                })
                ->addColumn('action', function($data){
                    $editUrl = route('admin.socials.edit',['social' => $data->id]);
                    $showUrl = route('admin.socials.show',['social' => $data->id]);
                    $deleteUrl = route('admin.socials.destroy',['social' => $data->id]);
                    $statusUrl = route('admin.social.status');
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
                            <a class="dropdown-item btn-outline-secondary openPopup" data-action-url="'.$showUrl.'" href="javascript:void(0);" data-title="Socials Details" title="Social Link View"><i class="ri-eye-line me-1"></i> View</a>
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
                    'status',
                    'social_name'
                ])
            ->make(true);
    }

    public function getSocial()
    {
        $socials = Cache::remember('socials', 60, function () {
            return $this->model::latest()->get();
        });
        return $socials;
    }

    public function store($data)
    {
        $count = self::socialCount();
        $orderBy = $count + 1;
        $social = new $this->model();
        $social->name = $data['social_name'];
        $social->icon = 'fa-'.Str::slug($data['social_name']);
        $social->link = $data['social_link'];
        $social->ordering = $orderBy;
        $social->save();
        return $social;
    }

    public function getDataByID(string $id)
    {
        $social = $this->model::findOrFail($id);
        return $social;
    }

    public function update($data, string $id)
    {
        $social = $this->model::find($id);
        $social->name = $data['social_name'];
        $social->link = $data['social_link'];
        $social->save();
        return $social;
    }

    public function destroy(string $id): bool
    {
        $this->model::destroy($id);
        Cache::forget('soiclas');
        return true;
    }

    public function statusUpdate($request):bool
    {
        $social = $this->model::findOrFail($request['id']);
        $social->status = $request['status'];
        $social->save();
        return true;
    }

    public function ordering($data):bool
    {
        foreach ($data as $index => $id) {
            $this->model::where('id', $id)->update(['ordering' => $index+1]);
        }
        return true;
    }

    public function socialCount()
    {
        $count = $this->model::count();
        return $count;
    }
}
