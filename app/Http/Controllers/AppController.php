<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
  public function index(){
    $bat = "Kookabura";
    $model = "Jos The Boss";
    //return "Hello in LARAVEl controller 2305C1";
    return view("welcome", compact("bat", "model"));
  }
}
