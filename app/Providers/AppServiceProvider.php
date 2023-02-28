<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // Blade::directive("listCategories", function($expression){
        //     $categories = Category::all();
        //     $html = "";
        //     foreach ($categories as $category) {
        //         $html .= "
        //             <a href='/product/seeCategory/$category->id/$category->name'>
        //              $category->name
        //             </a>";
        //     }

        //     return $html;
        // });
        /*
        Blade::directive("listCategories", function($expression){
            return '
                <?php 
                    $categories = App\Models\Category::all();
                    foreach ($categories as $category) {
                        echo "
            ';
        });
        Blade::directive("endlistCategories", function($expression){
            return '
                        ";
                    }
                ?>
            ';
        });*/
        Blade::directive("foreachCategories", function($expression){
            return '
                <?php 
                $categories = App\Models\Category::all();
                foreach ($categories as $category):
                ?>
            ';
        });

        Blade::directive("endforeachCategories", function($expression){
            return '
                <?php
                endforeach;
                ?>
            ';
        });
        
    }
}
