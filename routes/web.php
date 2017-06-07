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
Route::get('/submit', function() {
  $host        = "host=127.0.0.1";
  $port        = "port=5432";
  $dbname      = "dbname=test1";

  $db = pg_connect( "$host $port $dbname user=postgres password=root"  );
  if(!$db){
     echo "Error : Unable to open database\n";
  } else {
     echo "Opened database successfully\n";
  }
});
