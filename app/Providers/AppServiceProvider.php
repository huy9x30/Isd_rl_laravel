<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Sub_category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('layouts/master', function($view) {
            $categories = Category::all();
            $sub_categories = Sub_category::all();

            View::share('categories', $categories);
            View::share('sub_categories', $sub_categories);

          //   $view->with('categories', 
          //       'categories' => $categories,
          //       'sub_categories' => $sub_categories
          //   );
          // });
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
