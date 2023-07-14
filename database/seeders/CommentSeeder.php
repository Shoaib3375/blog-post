<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'blog_id' => 1,
                'comment' => 'Great blog post!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 2,
                'comment' => 'Thanks for sharing this information.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 3,
                'comment' => 'Nice post! Keep it up.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 4,
                'comment' => 'Nice post! Keep it up.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 5,
                'comment' => 'Nice post! want this kind blogs more.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 6,
                'comment' => 'Interesting topic. Thanks for sharing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 7,
                'comment' => 'very informative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 8,
                'comment' => 'I found this very helpful.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 9,
                'comment' => 'This will help us to make research paper.Thanks For sharing your valuable information.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 10,
                'comment' => 'Informative and useful.Keep up the good work',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 1,
                'comment' => 'Wow! Thank you for this story. It cuts to the bone. Very convicting. Thank you for being so transparent and real. I can totally relate, as I’m sure many can, to the “interruptions” that come our way as we are trying to prepare for our regular ministries. Ha! Go figure.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 3,
                'comment' => 'greeting all
                I am very happy about this excellent news!From now on the Southeast Region Conference (SRC) Church planting/Prayers Group will be praying for you. Thank you for your big heart and leadership!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 4,
                'comment' => 'Amazing Write-up!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
