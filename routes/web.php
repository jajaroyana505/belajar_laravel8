<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\PDO\PostgresDriver;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view("home", [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    $data = [
        "title" => "About",
        "active" => "about",
        "nama" => "Naila Nadira",
        "email" => "muhmmadjajaroyana4@gmail.com",
        "img" => "jaja.jpg",
    ];
    return view("about", $data);
});


Route::get('/blog', [PostController::class, 'index']);
// Halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function (Category $category) {
    return view(
        'categories',
        [
            'title' => $category->name,
            "active" => "categories",
            'categories' => Category::all()
        ]
    );
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view(
        'blog',
        [
            "active" => "blog",
            'title' => "Post by Category : $category->name",
            'posts' => $category->posts->load('category', 'author'),
        ]
    );
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('blog', [
        'title' => "Post by Author : $author->name",
        "active" => "blog",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});
