<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarBrand extends Model
{
    Use HasFactory,SoftDeletes;

    protected $table = 'car_brands';

    public function getCarBrandModels(){
        return $this->hasMany('App\Models\CarBrandModel','car_brand_id','id');
    }


}
