<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
	public $timestamps = false;
    //

    public function clicks()
    {
        return $this->hasMany('App\Click');
    }
}
