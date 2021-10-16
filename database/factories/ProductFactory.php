<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->word(3,true),
            'slug'=> $this->faker->slug(3,false),
            'description'=> $this->faker->text(50),
            'price'=> $this->faker->randomFloat(2,15000,35000000),
            'image'=> $this->faker->imageUrl(800,600),
            'userid'=> $this->faker->randomNumber(1,99)
        ];
    }
}
