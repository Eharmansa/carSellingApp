<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DamageRecord extends Model
{
    Use HasFactory,SoftDeletes;
    protected $table = 'damage_records';

    public function getCar()
    {
        return $this->belongsTo('App\Models\Car', 'damage_id', 'id');
    }

}
