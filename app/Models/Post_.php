<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Teguh",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi nisi quos recusandae officiis, quo ipsa excepturi adipisci quam fugiat nostrum molestiae, ratione non cupiditate, tempore numquam delectus cumque? Perspiciatis fuga officia ab doloribus, nam minima omnis magnam quis aliquam laudantium officiis, rerum animi. Ipsum, illo amet, totam laudantium, quisquam excepturi cupiditate dolore illum quae veritatis laborum recusandae accusantium perferendis? Recusandae odio, exercitationem totam, veniam sed eveniet consectetur enim incidunt molestias placeat nesciunt inventore sunt sapiente voluptatibus dolore molestiae cumque impedit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mahardika",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi nisi quos recusandae officiis, quo ipsa excepturi adipisci quam fugiat nostrum molestiae, ratione non cupiditate, tempore numquam delectus cumque? Perspiciatis fuga officia ab doloribus, nam minima omnis magnam quis aliquam laudantium officiis, rerum animi. Ipsum, illo amet, totam laudantium, quisquam excepturi cupiditate dolore illum quae veritatis laborum recusandae accusantium perferendis? Recusandae odio, exercitationem totam, veniam sed eveniet consectetur enim incidunt molestias placeat nesciunt inventore sunt sapiente voluptatibus dolore molestiae cumque impedit."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
