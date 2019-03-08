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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom-views', function() {

  $mysqlModel = new \App\MysqlModel();

  $start = microtime(true);

  $data = $mysqlModel->GetAll();

  $time_elapsed = microtime(true) - $start;

  return view('custom-views.index')->with('data', $data)->with('time_elapsed', $time_elapsed);
});
