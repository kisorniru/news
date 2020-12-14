<?php

namespace Database\Factories;

use App\Models\HuaweiCloud;
use Illuminate\Database\Eloquent\Factories\Factory;

class HuaweiCloudFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HuaweiCloud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'      => 'CH_',
            'name'      => $this->faker->realText(mt_rand(10, 20)),
            'details'   => $this->faker->text($maxNbChars = 200),
        ];
    }
}
