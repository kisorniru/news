<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsAstron;
use App\Models\NumbersOnly;
use App\Models\HuaweiCloud;

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
        HuaweiCloud::factory()->count(25)->create();
        // $this->call([
	        // NewsAstronSeeder::class,
	    // ]);
    }
}
