<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Departemen;
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

        User::create([
            'name' => 'Muhammad Jaja Royana',
            'username' => 'jajaroyana',
            'email' => 'muhammadjajaroyana3@gmail.com',
            'password' => bcrypt('123456')
        ]);
        User::factory(3)->create();


        Category::create([
            "name" => "Web Programing",
            "slug" => "web-programing"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);
        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);

        Post::factory(20)->create();

        Departemen::create([
            "name" => "Departemen Pendidikan",
            "slug" => "departemen-pendidikan",
            "description" => "Departemen Pendidikan dalam organisasi merancang program pembelajaran, mengajar, dan melatih anggota sesuai kebutuhan organisasi untuk mencapai tujuan dan pertumbuhan yang efektif.",
            "icon" => "<i class='bi bi-mortarboard'></i>"
        ]);
        Departemen::create([
            "name" => "Departemen Sosial",
            "slug" => "departemen-sosial",
            "description" => "Departemen Sosial organisasi mempromosikan kesejahteraan komunitas melalui program-program inklusi, dukungan sosial, dan hubungan positif antaranggota.",
            "icon" => "<i class='bi bi-people-fill'></i>"
        ]);
        Departemen::create([
            "name" => "Departemen Keorganisasian",
            "slug" => "departemen-keorganisasian",
            "description" => "Departemen Keorganisasian mengatur struktur dan sumber daya organisasi demi pencapaian tujuan dengan efisiensi maksimal.",
            "icon" => "<i class='bi bi-diagram-3'></i>"
        ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? ',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis rerum earum corrupti soluta ratione quidem libero laborum aperiam dolore tenetur? Ipsa ut officiis illum laborum quos sunt porro explicabo expedita, amet iste veniam!</p> <p> Assumenda consequuntur voluptatibus obcaecati, aliquam, porro necessitatibus iusto eius veniam officia, sequi labore eligendi sapiente asperiores repellendus! Odit natus in possimus, similique autem consequuntur ut aperiam explicabo pariatur quod laboriosam aliquam animi expedita repellat maxime dolorem itaque quo numquam quia, dolore fugit, at atque? Veniam consequuntur optio velit. At, unde odit? Necessitatibus iusto impedit optio! Placeat omnis itaque pariatur rerum.</p> <p> Cumque modi error labore optio ipsa beatae iusto voluptas distinctio cum ex? Fugiat autem quidem, molestias voluptatem quos ut nostrum sed non sint rerum, consectetur officiis aliquam velit pariatur corporis? Qui autem, deserunt, nesciunt ipsum ad, aperiam maiores odio dicta quam doloremque nisi. Repellendus inventore nesciunt nisi voluptas, reprehenderit delectus officiis asperiores ipsam earum debitis doloremque saepe.</p>'
        // ]);

    }
}
