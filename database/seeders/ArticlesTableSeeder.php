<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
        	'title' => 'This is the first title.',
        	'content' => 'This is the first content.',
        	'user_id' => User::find(1)->id,
        ]);

        Article::create([
        	'title' => 'This is the second title.',
        	'content' => 'This is the second content.',
        	'user_id' => User::find(1)->id,
        ]);
    }
}
