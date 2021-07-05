<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\ProductOrder;
use App\Models\ProductSave;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name'=>'Admin',
           'image'=>'image/image.png',
           'email'=>'userone@gmail.com',
           'password'=>Hash::make('password'),
       ]);
       User::create([
            'name'=>'User One',
            'image'=>'image/image.png',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password'),
       ]);
       Category::factory(5)->create();
       Product::factory(50)->create();
       ProductCart::factory(5)->create();
       ProductOrder::factory(5)->create();
       ProductSave::factory(5)->create();
    }
}

