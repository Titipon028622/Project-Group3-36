<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_type extends Model
{
    protected $primaryKey = 'id_type';

    public function product()
    {
        return $this->hasMany(Product::class,'id_type');
    }
}
