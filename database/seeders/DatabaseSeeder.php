<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Departemen;
use App\Models\Category;
use App\Models\Event;
use App\Models\Event_Category;
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

        Event_Category::create([
            "code" => "SM",
            "name" => "Seminar",
            "slug" => "seminar",
        ]);
        Event_Category::create([
            "code" => "WS",
            "name" => "Workshop",
            "slug" => "workshop",
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
    }
}
