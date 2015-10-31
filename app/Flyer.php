<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    /**
     * The fillable fields for a flyer
     *
     * @var array
     */

    protected $fillable = [
        'street',
        'city',
        'state',
        'country',
        'zip',
        'price',
        'description'
    ];
    
	/**
     * A flyer has MANY Photos
	 *
	 * @return 
	 */
    public function photos()
    {
    	//$flyer->photos
    	return $this->hasMany('App\Photo');
    }
}
