<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DepartmentsController@get_workers');

Route::get('/workersmany', 'DepartmentsController@get_workers_many');

Route::get('/departmentworkers', 'DepartmentsController@get_departmentWorkers');

Route::get('/workersmanyinverse', 'DepartmentsController@get_workers_many_inverse');
