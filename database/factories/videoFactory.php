<?php

namespace Database\Factories;

use App\Models\video;
use Illuminate\Database\Eloquent\Factories\Factory;

class videoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'url'=>'https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0'
        ];
    }
}
