<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
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
            'slug'=> uniqid(time()),
            'name'=>$this->faker->name,
            'category_id'=>Category::all()->random()->id,
            'image'=>'image/image.png',
            'description'=>$this->faker->text,
            'price'=>100,
            'view_count'=>100
        ];
    }
}
