<?php

namespace Shop\Providers;

use Illuminate\Support\ServiceProvider;
use Shop\Category;
use View;

use Shop\Http\Requests\LoginRequest;
use Shop\Http\Requests\ProfileRequest;
use Shop\Http\Requests\UserRequest;
use Shop\User;
use Auth;
use Shop\Category;
use Shop\OrderDetail;
use Shop\Product;
use Symfony\Component\DependencyInjection\Tests\Compiler\C;
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
