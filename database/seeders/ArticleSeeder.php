<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ArticleSeeder extends Seeder
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
            $title=$faker->sentence(6);
            DB::table('articles')->insert([
                'category_id'=>rand(1,5),
                'user_id'=>1,
                'title'=>$title,
                'status'=>1,
                'image'=>$faker->imageUrl(800, 400, 'cats', true, 'umutlion'),
                'content'=>$faker->paragraph(6),
                'hit'=>rand(3,90),
                'slug'=>Str::slug($title),
                'created_at'=>$faker->dateTime('now'),
                'updated_at'=>now()
            ]);
        }

    }
}
