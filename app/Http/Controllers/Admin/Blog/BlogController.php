<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogRequest;
use App\Services\Blog\BlogService;
use App\Services\Blog\CategoryService;
use App\Services\Blog\TagService;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use ResponseTrait;

    public function __construct(
        private BlogService $blogService,
        private CategoryService $categoryService,
        private TagService $tagService
    ){ }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->blogService->getDatatable($request->all());
        }
        return view('admin.blog.index');
    }

    public function create()
    {
        $categoryCollection = $this->categoryService->getAllCategory();
        $categories = $categoryCollection->where('status',1)->sortBy('name');
        $tagCollection = $this->tagService->getAllTags();
        $tags = $tagCollection->where('status',1)->sortBy('name');
        return view('admin.blog.create',compact(
            'categories',
            'tags'
        ));
    }

    public function store(BlogRequest $request)
    {
        $this->blogService->newsStore($request->all());
        $redirect = route('admin.news.index');
        return $this->success($redirect,'News created successfully');
    }

    public function show(string $id)
    {
        $news = $this->blogService->getNewsByID($id);
        return view('admin.blog.show',compact(
            'news'
        ));
    }

    public function edit(string $id)
    {
        $categoryCollection = $this->categoryService->getAllCategory();
        $categories = $categoryCollection->where('status',1)->sortBy('name');
        $tagCollection = $this->tagService->getAllTags();
        $tags = $tagCollection->where('status',1)->sortBy('name');
        $news = $this->blogService->getNewsByID($id);
        $news = $this->blogService->getNewsByID($id);
        $exsistingTagIds = $news->tags->pluck('id')->toArray();
        return view('admin.blog.edit',compact(
            'categories',
            'tags',
            'news',
            'exsistingTagIds'
        ));
    }

    public function update(BlogRequest $request, string $id)
    {
        $this->blogService->newsUpdate($request->all(),$id);
        $redirect = route('admin.news.index');
        return $this->success($redirect,'News updated successfully');
    }

    public function destroy(string $id)
    {
        $this->blogService->newsDelete($id);
        return $this->ajaxSuccess(['title' => 'Deleted!', 'success_msg' => 'News deleted successfully.','status' => true]);
    }

    public function status(Request $request)
    {
        $this->blogService->newsStatusCahnge($request->all());
        return $this->ajaxSuccess(['title' => 'Status Change!', 'success_msg' => 'News status changed successfully.','status' => true]);
    }
}
