<?php

namespace Database\Seeders;

use App\Models\Admin;
use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(SettingSeeder::class);
        Admin::factory()->create();
    }
}
