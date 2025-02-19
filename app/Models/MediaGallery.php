<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaGallery extends Model
{
    Use HasFactory,SoftDeletes;
    protected $table = 'media_gallery';

    public function getCar()
    {
        return $this->belongsTo('App\Models\Car', 'car_id', 'id');
    }
}
