<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\TagRequest;
use App\Services\Blog\TagService;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;

class TagController extends Controller
{
    use ResponseTrait;

    public function __construct(
        private TagService $tagService
    ){ }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->tagService->getDatatable($request->all());
        }
        return view('admin.tag.index');
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(TagRequest $request)
    {
        $this->tagService->storeTag($request->all());
        $redirect = route('admin.tags.index');
        return $this->success($redirect, 'Tag created successfully');
    }

    public function show(string $id)
    {
        $tag = $this->tagService->getTagByID($id);
        $returnHTML = view('admin.tag.show', ['tag' => $tag])->render();
        return $this->ajaxSuccess($returnHTML, 'Tag fetch successfully');
    }

    public function edit(string $id)
    {
        $tag = $this->tagService->getTagByID($id);
        return view('admin.tag.edit',compact(
            'tag'
        ));
    }

    public function update(TagRequest $request, string $id)
    {
        $this->tagService->updateTag($request->all(), $id);
        $redirect = route('admin.tags.index');
        return $this->success($redirect, 'Tag updated successfully');
    }

    public function destroy(string $id)
    {
        $this->tagService->deleteTag($id);
        return $this->ajaxSuccess(['title' => 'Deleted!', 'success_msg' => 'Tag deleted successfully.','status' => true]);
    }

    public function status(Request $request)
    {
        $this->tagService->statusChange($request->all());
        return $this->ajaxSuccess(['title' => 'Status Change!', 'success_msg' => 'Tag status changed successfully.','status' => true]);
    }
}
