<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();

         Post::factory(20)->create();

        // User::create([
        //     'name' =>'Teguh',
        //     'email' => 't@gmail.com',
        //     'password' => bcrypt('12335')
        // ]);

        Category::create([
            'name' =>'Personal',
            'slug' => 'per-sonal'
        ]);

        Category::create([
            'name' =>'Web Programming',
            'slug' => 'web-programming'
        ]);

        // Post::create([
        //     'title' => 'Derita',
        //     'slug' => 'puisi-derita',
        //     'excerpt' => 'aku kasi kesempatan',
        //     'body' => 'Tak tahu sampai kapan<br>
        //     Jalan yang ku tempuh ini sampai di ujung<br>
        //     Lelah... Aku merasa lelah<br>
        //     Dengan jalan yang aku tapaki<br>
        //     Mungkin memang harus ku kemudikan dengan baik<br>
        //     Agar sampai di tujuan sesuai keinginan<br>
        //     Tapi, bisa kah diriku?<br>
        //     Bisakah kemudi itu berkolaborasi dengan pikiranku ini?<br>
        //     Ataukah kemudi itu yang bisa membawa ku ke jalan yang benar?<br>
        //     Tuhan... Ada kah seseorang yang Kau siapkan untuk ku<br>
        //     Untuk bersama menopang beban yang ku pikul ini<br>
        //     Agar mau ku bagi kesedihan ku<br>
        //     Mau ku bagi derita ku<br>
        //     Tak tahu apa lagi yang bisa ku lakukan<br>
        //     Aku<br>
        //     Wanita yang penuh dosa<br>
        //     Yang berharap Kau mau menunjukkan<br>
        //     Kuasa-Mu itu untuk ku',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'aku kasi kesempatan',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse sequi similique, velit blanditiis sint eveniet ducimus necessitatibus cum quam recusandae quae? Quo minima ex quisquam numquam enim deleniti vel quidem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'aku kasi kesempatan',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse sequi similique, velit blanditiis sint eveniet ducimus necessitatibus cum quam recusandae quae? Quo minima ex quisquam numquam enim deleniti vel quidem.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
