<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $table = 'flyer_photos';

	protected $fillable = ['photo'];
    //$photo->flyer
    public function flyer ()
    {
    	return $this->belongsTo('App\Flyer');
    }
}
