<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Tag;

class CommonHelper
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function getMenuCategories()
    {
        $categories = Category::where('menu_item_set',1)->where('status',1)->orderBy('order_by','asc')->get();
        return $categories;
    }

    public static function getCategories()
    {
        $categories = Category::where('status',1)->orderBy('order_by','asc')->get();
        return $categories;
    }

    public static function getSocialLink()
    {
        return Social::where('status',1)->orderBy('ordering','asc')->get();
    }

    public static function getSetting()
    {
        $setting = Setting::first();
        if($setting){
            $setting->file_full_path = $setting->file_path_Url;
        }
        return $setting;
    }

    public static function getTags()
    {
        return Tag::where('status',1)->latest()->get();
    }
}
