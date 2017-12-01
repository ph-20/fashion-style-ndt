<?php

namespace Shop\Providers;

use Illuminate\Support\ServiceProvider;
use Shop\Category;
use View;
use Shop\Cart;
use Session;

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
            $parentCategories = Category::where('type', TYPE_CATEGORY_NAM)->get();

            $childCategories = Category::where('type', TYPE_CATEGORY_NU)->get();
            view::share(
                [
                    'parentCategories' => $parentCategories,
                    'childCategories' => $childCategories
                ]
            );
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
