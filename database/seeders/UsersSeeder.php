<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Nguyen Lan Anh',
                'email'=> 'anh10264@gmail.com',
                'password' => '1234567',
                'birthday' => '2001-02-24',
                'level' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Pham Huy Hung',
                'email'=> 'hungbd@gmail.com',
                'password' => '123456',
                'birthday' => '2001-04-24',
                'level' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Vu Duy Dan',
                'email'=> 'danvu@gmail.com',
                'password' => '12345670',
                'birthday' => '2001-10-11',
                'level' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Hoang Thi Huong',
                'email'=> 'huong88@gmail.com',
                'password' => '12345679',
                'birthday' => '2001-08-19',
                'level' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
