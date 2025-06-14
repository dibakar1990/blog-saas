<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogService;
use App\Services\Blog\CategoryService;
use App\Services\Blog\TagService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class NewsController extends Controller
{
    public function __construct(
         private CategoryService $categoryService,
         private BlogService $blogService,
         private TagService $tagService
    ){ }

    public function index(): Response
    {
        $news = $this->blogService->getActiveNews();
        foreach($news as $row){
            $row->file_path_url = $row->file_path_url;
            $row->post_date = Carbon::parse($row->created_at)->format('d-M-Y');
        }
        
        return Inertia::render('News/Index',[
            'news' => $news
        ]);
    }

    public function category_news(Request $request, $slug)
    {
       
        $type = $request->input('type');
        if(!empty($type)){
            $tagID = $this->tagService->getTagID($slug);
            $blogIds = $this->blogService->getBlogTagWithBlogID($tagID);
            $news = $this->blogService->getTagWiseBlog($blogIds);
            
        }else{
            
            $categoryID = $this->categoryService->getSlugWiseCategoryId($slug);
            $news = $this->blogService->categoryWiseNews($categoryID);
        }
        foreach($news as $row){
            $row->file_path_url = $row->file_path_url;
            $row->post_date = Carbon::parse($row->created_at)->format('d-M-Y');
        }
        return Inertia::render('News/CategoryNews',[
            'news' => $news
        ]);
    }

    public function show($slug)
    {
        $breadcrumb = [
            'home' => 'Home',
            'news' => 'News',
            'active' => 'News Details',
            'previousUrl' => route('news.index')
        ];
        $news = $this->blogService->getBlogWithSlug($slug);
        $news->file_path_url = $news->file_path_url;
        $news->post_date = Carbon::parse($news->created_at)->format('d-M-Y');
        $news->content = strip_tags($news->description);
        return Inertia::render('News/Show',[
             "breadcrumb" => $breadcrumb,
             'news' => $news
        ]);
    }
}
