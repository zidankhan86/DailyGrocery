<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function CategoryRelation(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }


    // public function OrderRelation(){
    //     return $this->belongsTo(Order::class,'')
    // }
}
