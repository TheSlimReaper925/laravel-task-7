<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    public function workers()
    {
    	return $this->hasOne('App\Workers', 'department_id');
    }

    public function workersMany()
    {
    	return $this->hasMany('App\Workers', 'department_id');
    }

    public function deparmentWorkers()
    {
    	return $this->belongsToMany('App\Workers', 'department_workers', 'user_id', 'department_id');
    }
}
