<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workers;
use App\Departments;
use App\Locations;

class DepartmentsController extends Controller
{
    public function get_workers()
    {
    	return Departments::with('workers')->get();
    }

    public function get_workers_many()
    {
    	return Departments::with(['Workers'])->get();
    }

    public function get_workers_many_inverse()
    {
    	return Workers::with(['departmentMany'])->get();
    }

    public function get_departmentWorkers()
    {
    	return Departments::with('deparmentWorkers')->get();
    }
}
