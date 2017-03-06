<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class PostModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Post::creating(function ($post) {
            $post->user_id = Auth::user()->id;
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}