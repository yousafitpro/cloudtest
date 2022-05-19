<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Category::where('id',1)->exists())
        {
            Category::create([
                'name'=>'My First Category'
            ]);

        }
        if (!Category::where('id',2)->exists()) {
            Category::create([
                'name' => 'My First Category 2'
            ]);
        }
        if (!Category::where('id',3)->exists()) {
            Category::create([
                'name' => 'My First Category 3'
            ]);
        }

    }
}
