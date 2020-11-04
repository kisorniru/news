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
            'headline'    => 'ভোট চলছে, কেন্দ্রে ভিড় কম',
            // 'headline'    => $this->faker->sentence($nbWords = 5, $variableNbWords = true),
            'paragraph_1' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'paragraph_2' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'paragraph_3' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'isExported' => 0,
        ];
    }
}