<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', function () {
    $data=App\Models\Task::all();
    return view('task')->with('task',$data);
});
Route::post('/saveTask','App\Http\Controllers\TaskController@store');

Route::get('/markascompleted/{id}','App\Http\Controllers\TaskController@updateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','App\Http\Controllers\TaskController@updateTaskAsNotCompleted');
Route::get('/deleteTask/{id}','App\Http\Controllers\TaskController@deleteTask');
Route::get('/updateTask/{id}','App\Http\Controllers\TaskController@updateTask');
Route::post('/update','App\Http\Controllers\TaskController@update');
Route::get('/cancelUpdate','App\Http\Controllers\TaskController@cancelUpdate');
