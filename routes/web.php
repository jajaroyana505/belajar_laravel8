<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view("home", [
        "title" => "Home",
    ]);
});
Route::get('/about', function () {
    $data = [
        "title" => "About",
        "nama" => "Naila Nadira",
        "email" => "muhmmadjajaroyana4@gmail.com",
        "img" => "jaja.jpg",
    ];

    return view("about", $data);
});
Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Jaja Royana",
            "slug" => "judul-post-pertma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam at explicabo tempore! Eos sunt earum cumque temporibus ipsum incidunt assumenda qui accusamus magni minima, delectus id odit laudantium dignissimos aliquam reprehenderit nobis ab, labore reiciendis? Magni, nostrum? Maiores neque voluptatem doloremque unde libero ipsum necessitatibus vel? Eum sit culpa fuga"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Naila Nadira",
            "slug" => "judul-post-kedua",

            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quos perspiciatis odio consectetur excepturi, aut, numquam tenetur ex doloremque, suscipit autem recusandae qui! Totam qui quis magnam provident est nesciunt vero dolorum eum ullam? Quas iste officiis magnam, vel nam inventore nostrum cumque quibusdam esse accusamus non in consectetur pariatur rem aliquid quaerat est deserunt, quo magni reiciendis earum, consequuntur hic et nesciunt. Enim harum itaque, tempore repellat tempora consequatur omnis recusandae obcaecati placeat sint ab veniam ut. Necessitatibus, provident?"
        ],
    ];
    return view("blog", [
        "title" => "Blog",
        "posts" => $blog_posts

    ]);
});

// Halaman single post

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Jaja Royana",
            "slug" => "judul-post-pertma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam at explicabo tempore! Eos sunt earum cumque temporibus ipsum incidunt assumenda qui accusamus magni minima, delectus id odit laudantium dignissimos aliquam reprehenderit nobis ab, labore reiciendis? Magni, nostrum? Maiores neque voluptatem doloremque unde libero ipsum necessitatibus vel? Eum sit culpa fuga"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Naila Nadira",
            "slug" => "judul-post-kedua",

            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quos perspiciatis odio consectetur excepturi, aut, numquam tenetur ex doloremque, suscipit autem recusandae qui! Totam qui quis magnam provident est nesciunt vero dolorum eum ullam? Quas iste officiis magnam, vel nam inventore nostrum cumque quibusdam esse accusamus non in consectetur pariatur rem aliquid quaerat est deserunt, quo magni reiciendis earum, consequuntur hic et nesciunt. Enim harum itaque, tempore repellat tempora consequatur omnis recusandae obcaecati placeat sint ab veniam ut. Necessitatibus, provident?"
        ],
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
