<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class Homecont extends Controller{

    public function index(){

      $vestiti = Dress::all();
      $data =[
        "dresses" => $vestiti
      ];
      return view("home", $data);

    }
};
