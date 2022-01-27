<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_product';

    public function type()
    {
        return $this->belongsTo(Products_type::class,'id_type');
    }
}
