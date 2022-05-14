<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicCrudController;

Route::get('/', [basicCrudController::class, 'onSelect']);
// Route::get('/', [basicCrudController::class, 'onInsert']);
// Route::get('/', [basicCrudController::class, 'onDelete']);
// Route::get('/', [basicCrudController::class, 'onUpdate']);
