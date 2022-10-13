<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfController;


Route::get('/',[ProfController::class,'index']);
Route::get('/prof/create',[ProfController::class,'create']);


