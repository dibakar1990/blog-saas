<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Services\Blog\CategoryService;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    use ResponseTrait;

    public function __construct(
        private CategoryService $categoryService
    ){ }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->categoryService->getDatatable($request->all());
        }
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        $category = $this->categoryService->storeCategory($request->all());
        $redirect = route('admin.categories.index');
        return $this->success($redirect, 'Category created successfully');
    }

    public function show(string $id)
    {
        $category = $this->categoryService->categoryByID($id);
        $returnHTML = view('admin.category.show', ['category' => $category])->render();
        return $this->ajaxSuccess($returnHTML, 'Category fetch successfully');
        //return Response::json(['status'=>true,'html'=>$returnHTML]);
        
    }

    public function edit(string $id)
    {
        $category = $this->categoryService->categoryByID($id);
        return view('admin.category.edit',compact(
            'category'
        ));
    }

    public function update(CategoryCreateRequest $request, string $id)
    {
        $this->categoryService->updateCategory($request->all(), $id);
        $redirect = route('admin.categories.index');
        return $this->success($redirect, 'Category updated successfully');
    }

    public function destroy(string $id)
    {
        
        $this->categoryService->categoryDelete($id);
        return $this->ajaxSuccess(['title' => 'Deleted!', 'success_msg' => 'Category deleted successfully.','status' => true]);
    }

    public function status(Request $request)
    {
        $this->categoryService->categoryStatusCahnge($request->all());
        return $this->ajaxSuccess(['title' => 'Status Change!', 'success_msg' => 'Category status changed successfully.','status' => true]);
    }

    public function menu_item_status(Request $request)
    {
        $this->categoryService->categoryMenuStatusCahnge($request->all());
        return $this->ajaxSuccess(['title' => 'Menu Item Status Change!', 'success_msg' => 'Category menu item status changed successfully.','status' => true]);
    }

    public function menu_item_position(Request $request)
    {
        $this->categoryService->getCategoryOrdering($request->order);
        return $this->ajaxSuccess(['title' => 'Menu Item ordering Change!', 'success_msg' => 'Category menu item ordering changed successfully.','status' => true]);
        
    }
}
