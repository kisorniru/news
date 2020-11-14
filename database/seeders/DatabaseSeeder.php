<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsAstron;
use App\Models\NumbersOnly;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        NewsAstron::factory()->count(5)->create();
        NumbersOnly::factory()->count(5)->create();
        // $this->call([
	        // NewsAstronSeeder::class,
	    // ]);
    }
}
