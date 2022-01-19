<?php

namespace Database\Seeders;

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
//         \App\Models\User::factory(10)->create();

//        User::truncate();
//        Post::truncate();
//        Category::truncate();

        $user = User::factory()->create([
           'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

//        $user = User::factory()->create();
//
//        $personal = Category::create([
//           'name' => 'Personal',
//           'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//           'category_id' => $family->id,
//           'title' => 'My Family Post',
//            'slug' => 'my-first-post',
//            'excerpt' => 'Lorem ipsum dolar.',
//            'body' => 'lorem ipsum text is right here'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => 'Lorem ipsum dolar.',
//            'body' => 'lorem ipsum text is right here'
//        ]);
    }
}
