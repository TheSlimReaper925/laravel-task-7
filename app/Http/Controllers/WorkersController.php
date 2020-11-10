<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workers;
use App\Departmets;
use App\Locations;

class WorkersController extends Controller
{
    public function get_workers()
    {
    	return Departments::with('workers')->first()['name'];
    }
}
