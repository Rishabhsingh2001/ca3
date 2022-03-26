<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SumController;

use GuzzleHttp\Middleware;

Route::get('/add',function() {    
    return view('add');
 });
 Route::post('/user/add',[SumController::class,'postSum']);
