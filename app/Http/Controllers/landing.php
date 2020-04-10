<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\resturentmodel;
class landing extends Controller
{
   
    public function index()
    {
        $data = resturentmodel::all();

        return view('home.index',['details'=>$data]);
  }
   	
}
