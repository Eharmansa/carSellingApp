<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Has;

class CarBrandModel extends Model
{
    Use HasFactory,SoftDeletes;

    protected $table = 'car_brand_models';

    public function getCarBrand(){
        return $this->belongsTo('App\Models\CarBrand','car_brand_id','id');
    }


}
