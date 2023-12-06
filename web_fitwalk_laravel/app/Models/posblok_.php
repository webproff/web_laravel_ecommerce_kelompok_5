<?php

namespace App\Models;


class posblok
{
    private static $goblog = [
        [
            'name' => 'puky',
            'slug' => 'judul-post-satu',
            'email' => 'puky@gmail.com',
            'konteks' => 'pukymak kau moga dilambatkan rezekinya'
        ],
        [
            'name' => 'mani',
            'slug' => 'judul-post-dua',
            'email' => 'mani@gmail.com',
            'konteks' => 'i need mani (money, bukan cum)'
        ],
    ];

    public static function all()
    {
        return collect(self::$goblog);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
