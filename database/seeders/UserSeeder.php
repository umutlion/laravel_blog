<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'lastname' => Str::random(5),
            'company' => 'Made By Sense',
            'email' => 'usertest@testmail.com',
            'username' => Str::random(10),
            'image'=>'https://picsum.photos/536/354',
            'password' => bcrypt(123456789),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
