<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'title'=>$this->faker->sentence(),
           'body'=>$this->faker->text(),
           'image'=>'post/small_img/img.jpg',
           'user_id'=>User::all()->random(),
           'category_id'=>category::all()->random()

        ];
    }
}
