<?php

namespace App\Http\Controllers\Admin\Social;

use App\Http\Controllers\Controller;
use App\Http\Requests\Social\SocialFormRequest;
use App\Services\SocialService;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    use ResponseTrait;

    public function __construct(
        private SocialService $socialService
    ){ }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->socialService->getDatatable($request->all());
        }
        return view('admin.social.index');
    }

    public function create()
    {
        return view('admin.social.create');
    }

    public function store(SocialFormRequest $request)
    {
        $social = $this->socialService->storeSoical($request->all());
        $redirect = route('admin.socials.index');
        return $this->success($redirect, 'Category created successfully');
    }

    public function show(string $id)
    {
        $social = $this->socialService->socialByID($id);
        $returnHTML = view('admin.social.show', ['social' => $social])->render();
        return $this->ajaxSuccess($returnHTML, 'social fetch successfully');
        //return Response::json(['status'=>true,'html'=>$returnHTML]);
        
    }

    public function edit(string $id)
    {
        $social = $this->socialService->socialByID($id);
        return view('admin.social.edit',compact(
            'social'
        ));
    }

    public function update(SocialFormRequest $request, string $id)
    {
        $this->socialService->updateSocial($request->all(), $id);
        $redirect = route('admin.socials.index');
        return $this->success($redirect, 'Soical link updated successfully');
    }

    public function destroy(string $id)
    {
        
        $this->socialService->socialDelete($id);
        return $this->ajaxSuccess(['title' => 'Deleted!', 'success_msg' => 'Social link deleted successfully.','status' => true]);
    }

    public function status(Request $request)
    {
        $this->socialService->socialStatusChange($request->all());
        return $this->ajaxSuccess(['title' => 'Status Change!', 'success_msg' => 'Social link status changed successfully.','status' => true]);
    }

    public function ordering(Request $request)
    {
        $this->socialService->getsocialOrdering($request->order);
        return $this->ajaxSuccess(['title' => 'Social link ordering Change!', 'success_msg' => 'Social link ordering changed successfully.','status' => true]);
        
    }
}
