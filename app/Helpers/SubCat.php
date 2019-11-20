<?php


use App\Category;

if (!function_exists('SubCat')) {

    function SubCat($id)
    {
        return App\Category::where('hasparent','=',$id)->get();

    }
}