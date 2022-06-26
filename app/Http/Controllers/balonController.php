<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\balon;

class balonController extends Controller
{
   public function crearBalon(){
    $balones= balon::all();

   }
}
