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
        $faker=Faker::create();
        for($i=1;$i<5;$i++){
            DB::table('users')->insert([
                'id'=>$i,
                'name' => Str::random(10),
                'lastname'=>Str::random(5),
                'company'=>'Made By Sense',
                'email' => Str::random(10).'@gmail.com',
                'username'=> Str::random(10),
                'password'=>bcrypt(123456789),
                'created_at'=>$faker->dateTime('now'),
                'updated_at'=>now()
            ]);
        }

    }
}
