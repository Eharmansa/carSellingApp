<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'cities';

    public function getDistrict()
    {
        return $this->hasMany('App\Models\District','city_id','id');
    }



}
