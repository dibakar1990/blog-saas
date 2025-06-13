<?php

namespace App\Repositories;

use App\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Services\FileUpload\FileUploadService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BlogRepository implements BlogRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private Blog $model,
        private BlogTag $blogTagModel,
        private FileUploadService $fileUpload
    ){ }

    public function getNewsDatatable($request)
    {
        $data = $this->model::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('file', function ($data) {
                    if($data->file_path != ''){
                        $file_path = '<div class="avatar avatar me-2 me-sm-4 rounded-2 bg-label-secondary"><img src="'.$data->file_path_url.'" alt="Product-13" class="rounded"></div>';
                    }else{
                        $file_path = '<div class="avatar avatar me-2 me-sm-4 rounded-2 bg-label-secondary"><img src="'.asset('backend/assets/img/no-image.jpg').'" alt="Product-13" class="rounded"></div>';
                    }
                    return $file_path;
                })
                
                ->addColumn('status', function ($data) {
                    if($data->status == '1'){
                        $newsStatus = '<span class="badge rounded-pill bg-label-success me-1">Active</span>';
                    }else if($data->status == 0){
                        $newsStatus = '<span class="badge rounded-pill bg-label-danger me-1">Inactive</span>';
                    }else{
                        $newsStatus = 'NA';
                    }
                    return $newsStatus;
                })
                ->addColumn('popular', function ($data) {
                    if($data->popular_news == '1'){
                        $popular_news = '<span class="badge rounded-pill bg-label-success me-1">Yes</span>';
                    }else if($data->popular_news == '0'){
                        $popular_news = '<span class="badge rounded-pill bg-label-danger me-1">No</span>';
                    }else{
                        $popular_news = 'NA';
                    }
                    return $popular_news;
                })
                ->addColumn('latest', function ($data) {
                    if($data->latest_news == '1'){
                        $latest_news = '<span class="badge rounded-pill bg-label-success me-1">Yes</span>';
                    }else if($data->latest_news == '0'){
                        $latest_news = '<span class="badge rounded-pill bg-label-danger me-1">No</span>';
                    }else{
                        $latest_news = 'NA';
                    }
                    return $latest_news;
                })
                
                ->addColumn('action', function($data){
                    $editUrl = route('admin.news.edit',['news' => $data->id]);
                    $showUrl = route('admin.news.show',['news' => $data->id]);
                    $deleteUrl = route('admin.news.destroy',['news' => $data->id]);
                    $statusUrl = route('admin.news.status');
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
                            <a class="dropdown-item btn-outline-secondary" href="'.$showUrl.'" title="News View"><i class="ri-eye-line me-1"></i> View</a>
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
                    if ($request['popular_news'] == '1' || $request['popular_news'] == '0') {
                        $instance->where('popular_news', $request['popular_news']);
                    }
                    if ($request['latest_news'] == '1' || $request['latest_news'] == '0') {
                        $instance->where('latest_news', $request['latest_news']);
                    }

                    if (!empty($request['search'])) {
                        $instance->where(function($q) use($request){
                            $search = $request['search'];
                            $q->orWhere('title', 'LIKE', "%$search%");
                        });
                    }
                })
                ->rawColumns([
                    'action',
                    'file',
                    'status',
                    'popular',
                    'latest'
                ])
        ->make(true);
    }

    public function getNews():array
    {
        $news = Cache::remember('news', 60, function () {
            return $this->model::latest()->get();
        });
        return $news;
    }

    public function store($data):bool
    {
        
        $tags = $data['tags'];
        if(isset($data['latest_news'])){
            $latest_news = $data['latest_news'];
        }else{
            $latest_news = 0;
        }

        if(isset($data['popular_news'])){
            $popular_news = $data['popular_news'];
        }else{
            $popular_news = 0;
        }

        if (!empty($data['file'])) {
            $uploaded_file = $data['file'];
            $file_path = $this->fileUpload->store($uploaded_file, '/news');
            
        }

        $news = new $this->model();
        $news->title = $data['news_title'];
        $news->slug = Str::slug($data['news_title']);
        $news->category_id = $data['category'];
        $news->popular_news = $popular_news;
        $news->latest_news = $latest_news;
        $news->description = $data['description'];
        $news->file_path = $file_path;
        $news->created_by = Auth::user()->id;
        $news->save();
        if($news){
            foreach ($tags as $tagId) {  
                $this->blogTagModel::insert([
                    'blog_id' => $news->id,
                    'tag_id' => $tagId
                ]);
            }
        }
        return true;
    }

    public function findOrFail(string $id)
    {
        $news = Cache::remember('news_{$id}', 60, function () use ($id) {
            return $this->model::findOrFail($id);
        });
        return $news;
    }

    public function update($data, string $id):bool
    {
        $news = $this->model::find($id);
        $tags = $data['tags'];
        if(isset($data['latest_news'])){
            $latest_news = $data['latest_news'];
        }else{
            $latest_news = 0;
        }

        if(isset($data['popular_news'])){
            $popular_news = $data['popular_news'];
        }else{
            $popular_news = 0;
        }

        if (!empty($data['file'])) {
            if($news->file_path !='') {
                if(Storage::exists($news->file_path)){
                    Storage::delete($news->file_path);
                }
            }
            $uploaded_file = $data['file'];
            $file_path = $this->fileUpload->store($uploaded_file, '/news');
            
        }else{
            $file_path = $news->file_path;
        }

        $news->title = $data['news_title'];
        $news->category_id = $data['category'];
        $news->popular_news = $popular_news;
        $news->latest_news = $latest_news;
        $news->description = $data['description'];
        $news->file_path = $file_path;
        $news->save();
        if(!empty($data['tags'])){
            $this->blogTagModel::where('blog_id', $id)->delete();
            foreach ($tags as $tagId) {  
                $this->blogTagModel::insert([
                    'blog_id' => $news->id,
                    'tag_id' => $tagId
                ]);
            }
        }
        return true;
    }

    public function destroy(string $id): bool
    {
        $news = $this->model::findOrFail($id);
        if($news->file_path !='') {
            if(Storage::exists($news->file_path)){
                Storage::delete($news->file_path);
            }
        }
        $this->model::destroy($id);
        Cache::forget('news');
        Cache::forget("news_{$id}");
        return true;
    }

    public function statusUpdate($request):bool
    {
        $news = $this->model::findOrFail($request['id']);
        $news->status = $request['status'];
        $news->save();
        return true;
    }

    public function getCategoryNews($categoryId)
    {
        $blogs = $this->model::where('category_id',$categoryId)
                ->where('status',1)->latest()->paginate(10)->withQueryString();
        return $blogs;
    }

    
    public function getAllActiveNews()
    {
        $blogs = $this->model::with('category')->where('status',1)->latest()->paginate(10)->withQueryString();
        
        return $blogs;
    }
}
