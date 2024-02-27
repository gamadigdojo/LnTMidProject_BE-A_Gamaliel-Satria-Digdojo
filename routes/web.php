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
    $dataEmployee = App\Models\EmployeeModel::all();
    return view('index', ["dataEmployee"=>$dataEmployee]);
});

//CRUD
Route::get('/add-employee',function(){
    return view('add-employee');
});
Route::post('/add-employee',[App\Http\Controllers\Employee::class, "addEmployee"]);  

Route::get('/manage-employee', function() {
    $dataEmployee = App\Models\EmployeeModel::all();
    return view('manage-employee', ["dataEmployee"=>$dataEmployee]);
});

Route::get('/delete-employee/{id}', [App\Http\Controllers\Employee::class, "deleteEmployee"]);

Route::get('/edit-employee/{id}',  [App\Http\Controllers\Employee::class, "getUpdateEmployee"]);
Route::put('/edit-employee/{id}',  [App\Http\Controllers\Employee::class, "updateEmployee"]);
