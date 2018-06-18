<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Court extends Model
{
    public function user(){
        return $this->belongsto('App\User');
    }
}
