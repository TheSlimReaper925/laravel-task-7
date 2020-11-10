<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    public function departmentMany()
    {
    	return $this->belongsTo('App\Departments', 'department_id');
    }

    public function departmentWorkers()
    {
    	return $this->belongsToMany('App\Departments', 'departmentWorkers', 'user_id', 'deparment_id');
    }
}
