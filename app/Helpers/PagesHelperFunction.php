<?php


use App\Category;

if (!function_exists('PagesHelperFunction')) {

    function PagesHelperFunction()
    {
        return App\Category::all();

    }
}
