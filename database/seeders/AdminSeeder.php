<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Laravel',
            'surname'=>'Testing',
            'username'=>'tester',
            'email'=>'laraveltest@testmail.com',
            'password'=>bcrypt(123456789),
            'twitter'=>'https://twitter.com/kafadanpilot',
            'github'=>'https://github.com/umutlion',
            'job'=>'Backend Developer',
            'ulke'=>'Turkiye',
            'sehir'=>'Istanbul',
            'hobileriniz'=>'empty',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
