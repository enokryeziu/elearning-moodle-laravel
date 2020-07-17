<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function user(){
        return $this->belongsTo('App\User','tutor_id');
    }
}
