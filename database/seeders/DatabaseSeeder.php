<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsAstron;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        NewsAstron::factory()->count(1)->create();
    }
}
