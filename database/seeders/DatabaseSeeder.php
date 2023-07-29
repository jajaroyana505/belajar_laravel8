<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            "name" => "Jaja Royana",
            "email" => "jajaroyana@gmail.com",
            "password" => bcrypt('12345')
        ]);
        User::create([
            "name" => "Naila",
            "email" => "naila@gmail.com",
            "password" => bcrypt('12345')
        ]);

        Category::create([
            "name" => "Web Programing",
            "slug" => "web-programing"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? ',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? Ipsa ut officiis illum laborum quos sunt porro explicabo expedita, amet iste veniam!</p> <p> Assumenda consequuntur voluptatibus obcaecati, aliquam, porro necessitatibus iusto eius veniam officia, sequi labore eligendi sapiente asperiores repellendus! Odit natus in possimus, similique autem consequuntur ut aperiam explicabo pariatur quod laboriosam aliquam animi expedita repellat maxime dolorem itaque quo numquam quia, dolore fugit, at atque? Veniam consequuntur optio velit. At, unde odit? Necessitatibus iusto impedit optio! Placeat omnis itaque pariatur rerum.</p> <p> Cumque modi error labore optio ipsa beatae iusto voluptas distinctio cum ex? Fugiat autem quidem, molestias voluptatem quos ut nostrum sed non sint rerum, consectetur officiis aliquam velit pariatur corporis? Qui autem, deserunt, nesciunt ipsum ad, aperiam maiores odio dicta quam doloremque nisi. Repellendus inventore nesciunt nisi voluptas, reprehenderit delectus officiis asperiores ipsam earum debitis doloremque saepe.</p>'
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? ',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? Ipsa ut officiis illum laborum quos sunt porro explicabo expedita, amet iste veniam!</p> <p> Assumenda consequuntur voluptatibus obcaecati, aliquam, porro necessitatibus iusto eius veniam officia, sequi labore eligendi sapiente asperiores repellendus! Odit natus in possimus, similique autem consequuntur ut aperiam explicabo pariatur quod laboriosam aliquam animi expedita repellat maxime dolorem itaque quo numquam quia, dolore fugit, at atque? Veniam consequuntur optio velit. At, unde odit? Necessitatibus iusto impedit optio! Placeat omnis itaque pariatur rerum.</p> <p> Cumque modi error labore optio ipsa beatae iusto voluptas distinctio cum ex? Fugiat autem quidem, molestias voluptatem quos ut nostrum sed non sint rerum, consectetur officiis aliquam velit pariatur corporis? Qui autem, deserunt, nesciunt ipsum ad, aperiam maiores odio dicta quam doloremque nisi. Repellendus inventore nesciunt nisi voluptas, reprehenderit delectus officiis asperiores ipsam earum debitis doloremque saepe.</p>'
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? ',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? Ipsa ut officiis illum laborum quos sunt porro explicabo expedita, amet iste veniam!</p> <p> Assumenda consequuntur voluptatibus obcaecati, aliquam, porro necessitatibus iusto eius veniam officia, sequi labore eligendi sapiente asperiores repellendus! Odit natus in possimus, similique autem consequuntur ut aperiam explicabo pariatur quod laboriosam aliquam animi expedita repellat maxime dolorem itaque quo numquam quia, dolore fugit, at atque? Veniam consequuntur optio velit. At, unde odit? Necessitatibus iusto impedit optio! Placeat omnis itaque pariatur rerum.</p> <p> Cumque modi error labore optio ipsa beatae iusto voluptas distinctio cum ex? Fugiat autem quidem, molestias voluptatem quos ut nostrum sed non sint rerum, consectetur officiis aliquam velit pariatur corporis? Qui autem, deserunt, nesciunt ipsum ad, aperiam maiores odio dicta quam doloremque nisi. Repellendus inventore nesciunt nisi voluptas, reprehenderit delectus officiis asperiores ipsam earum debitis doloremque saepe.</p>'
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? ',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? Ipsa ut officiis illum laborum quos sunt porro explicabo expedita, amet iste veniam!</p> <p> Assumenda consequuntur voluptatibus obcaecati, aliquam, porro necessitatibus iusto eius veniam officia, sequi labore eligendi sapiente asperiores repellendus! Odit natus in possimus, similique autem consequuntur ut aperiam explicabo pariatur quod laboriosam aliquam animi expedita repellat maxime dolorem itaque quo numquam quia, dolore fugit, at atque? Veniam consequuntur optio velit. At, unde odit? Necessitatibus iusto impedit optio! Placeat omnis itaque pariatur rerum.</p> <p> Cumque modi error labore optio ipsa beatae iusto voluptas distinctio cum ex? Fugiat autem quidem, molestias voluptatem quos ut nostrum sed non sint rerum, consectetur officiis aliquam velit pariatur corporis? Qui autem, deserunt, nesciunt ipsum ad, aperiam maiores odio dicta quam doloremque nisi. Repellendus inventore nesciunt nisi voluptas, reprehenderit delectus officiis asperiores ipsam earum debitis doloremque saepe.</p>'
        ]);
    }
}
