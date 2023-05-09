<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function UserRelation(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function ProductRelation(){
        return $this->belongsTo(Products::class,'product_id','id');
    }
}
