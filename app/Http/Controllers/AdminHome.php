<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
class AdminHome extends Controller
{
    public function index()
    {
    	return view('admin.home');
    }

   	public function profile(Request $req)
   	{
   		$data = User::where('username',$req->session()->get('userid'))->first();
   		
   		return view('admin.profile', $data);
   	}

   	

}
