<?php

namespace Database\Factories;

use App\Models\contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use PharIo\Manifest\Email;

class contactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'subject'=>$this->faker->sentence(),
            'message'=>$this->faker->text(),
            'email'=>$this->faker->freeEmail()

        ];
    }
}
