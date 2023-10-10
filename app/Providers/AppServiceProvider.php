<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrap();
        $users = User::all();
        $popular = Article::orderBy("view" , "desc")->limit(3)->get();
        View::share("popular"  , $popular);
        View::share("users" , $users);
    }
}
