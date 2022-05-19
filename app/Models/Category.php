<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use HasFactory,SoftDeletes;
    protected $fillable=['name'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function getProductCountAttribute(){
        return Product::where('category_id',$this->id)->get()->count();
    }
    public function scopeProductCount($query, $limit)
    {
        $query2=$query;
        $category=$query2->first();
        if ($category->products->count()>0)
        {

            return $query->where('id',$category->id);

        }
        return $query->where('id','1231h23123');


    }

}
