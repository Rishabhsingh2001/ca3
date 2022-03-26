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
    //return view('welcome');
    $to_name='Rishabh singh';
    $to_email='rishabh656singh@gmail.com';
    $data=array('name'=>'Rishabh', 'body'=>"Test mail sent from Rishabh to Rishabh for CA3 MVC Project");
    Mail::send('mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)
        ->subject('Testing Mail');
    });
    echo "Mail has been sent";
});
