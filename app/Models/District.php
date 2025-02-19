<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    Use HasFactory, SoftDeletes;
    protected $table = 'districts';

    public function getCity(){
        return $this->belongsTo('App\Models\City', 'city_id', 'id');
    }

}
