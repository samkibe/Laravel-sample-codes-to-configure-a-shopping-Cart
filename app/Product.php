<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $guarded = [];
   protected $table = 'products';
   protected $fillable = ['id','product', 'price', 'image'];


    }

