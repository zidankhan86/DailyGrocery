<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function CategoryRelation(){
        return $this->belongsTo(Category::class,'category_id','id');// Category_id holo product table er jonno r id holo category table er .
                                                                     //category_id holo foreignId product table er jonno.
    }
}
