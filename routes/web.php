<?php

use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Blog\CategoryController;
use App\Http\Controllers\Admin\Blog\TagController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Social\SocialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Jobs\SendEmailJob;
use App\Mail\AllUserSendMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/subscribe-email', [ContactController::class, 'subscribe']);
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'category_news']);
Route::get('/news-details/{slug}', [NewsController::class, 'show']);

Auth::routes(['register' => false]);

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('profile',ProfileController::class)->only('index','update');
    Route::get('account/setting',[ProfileController::class,'setting'])->name('account.setting');
    Route::get('change/password',[ProfileController::class,'change_password'])->name('change.password');
    Route::post('update/password/{id}',[ProfileController::class,'update_password'])->name('update.password');

    Route::resource('categories',CategoryController::class);
    Route::post('category/status',[CategoryController::class,'status'])->name('category.status');
    Route::post('category/menu-item-status',[CategoryController::class,'menu_item_status'])->name('category.menustatus');
    Route::post('category/menu-item-position-change',[CategoryController::class,'menu_item_position'])->name('category.menu-item-position-change');

    Route::resource('tags',TagController::class);
    Route::post('tag/status',[TagController::class,'status'])->name('tag.status');

    Route::resource('news',BlogController::class);
    Route::post('news/status',[BlogController::class,'status'])->name('news.status');

    Route::resource('setting',SettingController::class)->only('index','update');

    Route::resource('socials',SocialController::class);
    Route::post('social/status',[SocialController::class,'status'])->name('social.status');
    Route::post('social/ordering',[SocialController::class,'ordering'])->name('social.ordering');

    Route::get('/send-email', function () {
        $users = User::get();
        foreach($users as $user){
            SendEmailJob::dispatch($user);
        }
      
    
        return 'Email sent!';
    
    });
   
});


