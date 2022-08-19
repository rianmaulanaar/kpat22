<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


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

Route::view('/pertemuan2', 'view-pertemuan2');
Route::view('/portofolio', 'portofolio');
Route::view('/portofolio2', 'tabelblog');

//CRUD
//Route::get('tes', [BlogController::Class, 'index']);
Route::get('/tabelblog', 'App\Http\Controllers\BlogController@index');

Route::get('tambahdata', [BlogController::Class, 'create'])->name('tambahdata');

Route::post('save', [BlogController::Class, 'save'])->name('save');

Route::delete('hapusdata/{id}', [BlogController::Class, 'delete'])->name('delete');

Route::get('editdata/{ubah}', [BlogController::Class, 'edit'])->name('edit');

Route::patch('simpanperubahan/{ubah}', [BlogController::Class, 'update'])->name('update');
