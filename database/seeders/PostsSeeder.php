<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
//            [
//                'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
//                'title' => 'Even the all-powerful Pointing has no control about the blind texts',
//                'image' => '{"image1" : "blog-post-1.jpg"}',
//                'user_id' => '1',
//                'cate_id' => '6',
//                'tag_id' => '1',
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//
//            ],
//            [
//                'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad
//                               architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam,
//                               adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet,
//                               consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid.
//                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.',
//                'title' => 'Two Ways To Wear Straight Shoes',
//                'image' => '{"image2" : "blog-post-2.jpg"}',
//                'user_id' => '2',
//                'cate_id' => '7',
//                'tag_id' => '2',
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad
//                           architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam,
//                           adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet,
//                           consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid.
//                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.',
//                'title' => 'Making A Denim Statement',
//                'image' => '{"image2" : "blog-post-3.jpg"}',
//                'user_id' => '3',
//                'cate_id' => '8',
//                'tag_id' => '3',
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad
//                           architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam,
//                           adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet,
//                           consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid.
//                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.',
//                'title' => 'Standard Text Post',
//                'image' => '{"image2" : "blog-post-4.jpg"}',
//                'user_id' => '4',
//                'cate_id' => '9',
//                'tag_id' => '4',
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ]
            [
                'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad
                           architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam,
                           adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet,
                           consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.',
                'title' => 'Red shoes',
                'image' => '{"image2" : "blog-post-4.jpg"}',
                'user_id' => '1',
                'cate_id' => '9',
                'tag_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
