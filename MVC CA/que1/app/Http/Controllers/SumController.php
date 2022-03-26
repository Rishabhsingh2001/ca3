<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SumController extends Controller
{
    public function postSum(Request $request) {
        
        $numone = $request->input('numone');
        echo 'First Number: '.$numone;
        echo '<br>';
        $numtwo = $request->input('numtwo');
        echo 'Second Number :'.$numtwo;
        echo '<br>';
        echo 'Sum of two numbers is: '.$numone + $numtwo;
        echo '<br>';
     }
}
