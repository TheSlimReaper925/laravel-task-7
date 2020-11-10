<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
	public function Departments($value='')
	{
		return $this->hasMany('App\Departments', 'location_id');
	}
    
}
