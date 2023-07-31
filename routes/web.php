<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;


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


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');



// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view(
//         'blog',
//         [
//             "active" => "blog",
//             'title' => "Post by Category : $category->name",
//             'posts' => $category->posts->load('category', 'author'),
//         ]
//     );
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('blog', [
//         'title' => "Post by Author : $author->name",
//         "active" => "blog",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });
