<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    protected $table = 'crimes';
    public $timestamps = false  ;

    protected $fillable = ['detective_id', 'user_id', 'subject', 'description'];
}
