<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function categories()
   {
        $list=Category::has("products",'>',1)->get();
        return response()->json($list);
   }
   public function get($id)
   {
        return Category::find($id)->name;
   }
}
