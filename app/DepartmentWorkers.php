<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentWorkers extends Model
{
    public function departaments()
    {
    	return $this->hasOne('App\Departaments');
    }
}
