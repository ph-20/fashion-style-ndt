<?php

namespace Shop\Providers;

use Illuminate\Support\ServiceProvider;
use Shop\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('front-end/layouts/header', function ($view) {
            $category = Category::all()->where('id', '>', 3)->where('id', '<', 7);

            $category1 = Category::all()->where('id', '>', 6)->where('id', '<', 10);
            $category2 = Category::all()->where('id', '>', 9)->where('id', '<', 13);


            $view->with('categoty', $category)->with('categoty1', $category1)->with('categoty2', $category2);
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
