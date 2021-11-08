<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
    // \Illuminate\Support\Facades\DB::listen(function ($query) {
    //     logger($query->sql, $query->bindings);
    // });
    // ^ logs sql queries
    return view('posts', [
        'posts' => Post::with('category')->get() // only 2 queries; 1. get posts 2. get categories these posts belong to
    ]);
});

Route::get('posts/{post:slug}', function(Post $post)  {

    return view('post', [
        'post' => $post
    ]);
});
 
// })->where('post', '[A-z_\-]+');
// })->whereAlpha('post');
// })->whereNumber('post');
// })->whereAlphaNumberic('post');

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts ', [
        'posts' => $category->posts
    ]);
});