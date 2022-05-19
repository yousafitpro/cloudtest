<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=1; $i<=10; $i++)
       {
           Product::create(
               [
                   'category_id'=>1,
                   'name'=>rand(0,20)
               ]
           );
       }
        for ($i=1; $i<=10; $i++)
        {
            Product::create(
                [
                    'category_id'=>2,
                    'name'=>rand(0,20)
                ]
            );
        }
    }
}
