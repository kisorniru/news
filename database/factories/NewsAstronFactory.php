<?php

namespace Database\Factories;

use App\Models\NewsAstron;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsAstronFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsAstron::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'headline'    => $this->faker->word().' - ভোট চলছে, কেন্দ্রে ভিড় কম',
            'paragraph_1' => $this->faker->realText(mt_rand(20, 70)),
            'paragraph_2' => $this->faker->realText(mt_rand(20, 70)),
            'isExported' => 0,
        ];
    }
}
