<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Banner;


class CategoryController extends Controller
{
    public function top5Banners(string $code, Request $request) : View
    {
            $category = Category::where('code', $code)->firstOrFail();
            if ($category->is_active == false) {
                abort(404);
            }
            $categoryId = $category->id;
            $bannerIds = DB::table('category_banner')
                            ->where('category_id', '=', $categoryId)
                            ->pluck('id')
                            ->sortBy('active_since')
                            ->take(5);
            $banners = Banner::whereIn('id', $bannerIds)->get()->toArray();

            
            $filterBanners = array();
            if (isset($request['is_active']) && isset($request['active_since']) 
                && isset($request['active_until'])) {
                
                    foreach ($banners as $banner) {
                        if ($banner['is_active'] == $request['is_active'] && 
                            strtotime($banner['active_since']) >= strtotime($request['active_since']) &&
                            strtotime($banner['active_until']) <= strtotime($request['active_until'])) {
    
                                $filterBanners[] = $banner;
                        }
                }
            }
            else {
                $filterBanners = $banners;
            }

            return view('category')->with('banners', $filterBanners)->with('category', $category);
    }
}