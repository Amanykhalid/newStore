<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    //
    public function opration($x,$y,$z){
   
        // switch($y){
        //     case "+" :$result=$x+$z; break;
        //     case "-" :$result=$x-$z; break;
        //     case "*" :$result=$x*$z; break;
        //     default:$result="no opration";
        // }
        $out=0;
        eval("\$out=$x $y $x;");
        return "The Final Result :". $out; 
    }
}
