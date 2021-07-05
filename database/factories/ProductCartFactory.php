<?php

namespace Database\Factories;

use App\Models\ProductCart;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
class ProductCartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductCart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>1,
            'product_id'=>Product::all()->random()->id,
            'qty'=>1
        ];
    }
}
