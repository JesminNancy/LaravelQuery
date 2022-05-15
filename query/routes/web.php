<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicCrudController;

Route::get('/', [basicCrudController::class, 'onSelect']);

Route::get('/insert', function(){
  return view('insert');
});

 Route::post('/insertData', [basicCrudController::class, 'onInsert']);
 
// Route::get('/', [basicCrudController::class, 'onUpdate']);
