<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Models\Computers;

Route::get('/', [homecontroller::class, 'menu']);
Route::get('/futbol', [homecontroller::class, 'futbol']);
Route::get('/basket', [homecontroller::class, 'basket']);
Route::get('/voley', [homecontroller::class, 'voley']);

Route::get('/insertarvalor', function () {
    
  $computer = new Computers;
  $computer->model='Legion';
  $computer->mark='Lenovo';
  $computer->size=16;
  $computer->save();

  $computer = new Computers;
  $computer->model='HoLa';
  $computer->mark='HP';
  $computer->size=19;
  $computer->save();
  
  

  //return $computer->created_at->format('d-m-y');
  return $computer->created_at->diffForHumans();

});






//empieza menu basico
//Route::get('/futbol', function () {
 //   return view('futbol');
//});

//Route::get('/basket', function () {
 //   return view('basket');
//});

//Route::get('/voley', function () {
  //  return view('voley');
//});