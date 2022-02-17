<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'user_id' => '1',
                'post_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'user_id' => '2',
                'post_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'user_id' => '3',
                'post_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'user_id' => '4',
                'post_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
