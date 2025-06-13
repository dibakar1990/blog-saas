<?php

namespace App\Http\Controllers;

use App\Helpers\CommonHelper;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Tag;
use App\Services\Blog\BlogService;
use App\Services\Blog\CategoryService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class NewsController extends Controller
{
    public function __construct(
         private CategoryService $categoryService,
         private BlogService $blogService
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
            $tagID = Tag::where('slug',$slug)->where('status',1)->value('id');
            $blogIds = BlogTag::where('tag_id',$tagID)->pluck('blog_id');
            $news = Blog::whereIn('id',$blogIds)->latest()->get();
            
        }else{
            $categoryID = $this->categoryService->getSlugWiseCategoryId($slug);
            $news = $this->blogService->categoryWiseNews($categoryID);
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
        return Inertia::render('News/Show',[
             "breadcrumb" => $breadcrumb
        ]);
    }
}
