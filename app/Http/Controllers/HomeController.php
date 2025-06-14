<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogService;
use Carbon\Carbon;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\support\Str;

class HomeController extends Controller
{
    public function __construct(
        private BlogService $blogService
    ){ }

    public function index(): Response
    {
        $data = [];
        $headNews = $this->blogService->getHeadNews();
        foreach($headNews as $row){
            $row->file_path_url = $row->file_path_url;
            $row->post_date = Carbon::parse($row->created_at)->format('d-M-Y');
        }

        $categoryBlog = $this->blogService->getCategoryBlogs();
        foreach($categoryBlog as $row){
            foreach($row->blogs as $blog){
                $blog->file_path_url = $blog->file_path_url;
                $blog->post_date = Carbon::parse($blog->created_at)->format('d-M-Y');
            }
        }

        $latestNews = $this->blogService->getLatestNews();
        foreach($latestNews as $lVal){
            $lVal->file_path_url = $lVal->file_path_url;
            $lVal->post_date = Carbon::parse($lVal->created_at)->format('d-M-Y');
            $lVal->short_description = Str::limit(strip_tags($lVal->description), 200);
        }

        $topNews = $this->blogService->getTopNews();
        foreach($topNews as $val){
            $val->file_path_url = $val->file_path_url;
            $val->post_date = Carbon::parse($val->created_at)->format('d-M-Y');
            $val->short_description = Str::limit(strip_tags($val->description), 200);
        }

        $data['headNews'] = $headNews;
        $data['categoryBlog'] = $categoryBlog;
        $data['topNews'] = $topNews;
        $data['latestNews'] = $latestNews;
        //dd($data);
        return Inertia::render('Home',[
            'data' => $data
        ]);
    }
}
