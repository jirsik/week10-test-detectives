<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detective extends Model
{
    protected $table = 'detectives';
    public $timestamps = false  ;

    public function images() {
        return $this->belongsTo('App\User');
        return $this->belongsToMany('App\Image', 'detective_image', 'detective_id', 'image_id');
    }
}
