<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductSave;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSaveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductSave::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'user_id'=>1,
            'product_id'=>Product::all()->random()->id
        ];
    }
}
