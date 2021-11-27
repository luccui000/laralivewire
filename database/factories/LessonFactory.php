<?php

namespace Database\Factories;

use App\Models\Lesson; 
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        return [
            'name' => $this->faker->text(50),
            'views' => random_int(100, 1000),
            'level' => Lesson::LEVEL[random_int(0, 4)],
            'length' => random_int(100, 1000)
        ];
    }
}
