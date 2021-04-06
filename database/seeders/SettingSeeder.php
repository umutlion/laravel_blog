<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title'=>'Umutlion Personal Blog',
            'status'=>1,
            'logo'=>'https://source.unsplash.com/random',
            'favicon'=>'https://source.unsplash.com/random',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
