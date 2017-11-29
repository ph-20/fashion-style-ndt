<?php

namespace Shop\Providers;

use Illuminate\Support\ServiceProvider;
use Shop\Category;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('front-end.layouts.header', function () {
            $parentCategories = Category::where('type', 0)->get();

            $childCategories = Category::where('type', 1)->get();
            view::share(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
        });
        view()->composer('front-end/pages/category', function () {
            $categories = Category::where('type', 0)->get();
            $childCategories = Category::where('type', 1)->get();
            View::share(['categories' => $categories, 'childCategories' => $childCategories]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
