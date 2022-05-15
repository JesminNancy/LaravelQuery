<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicCrudController;

Route::get('/', [basicCrudController::class, 'onSelect']);

Route::get('/insert', function(){
  return view('insert');
});

Route::get('/delete', function(){
  return view('delete');
});

 Route::post('/insertData', [basicCrudController::class, 'onInsert']);
 
 Route::post('/deleteData', [basicCrudController::class, 'onDelete']);
 
// Route::get('/', [basicCrudController::class, 'onUpdate']);
