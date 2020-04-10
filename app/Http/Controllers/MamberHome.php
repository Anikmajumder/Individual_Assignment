<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
class MamberHome extends Controller
{
    public function index()
    {
    	return view('mamber.index');
    }

   	public function profile(Request $req)
   	{
   		$data = User::where('username',$req->session()->get('userid'))->first();
   		//$data = $user;
   		return view('mamber.profile', $data);
   	}

   	public function profileUpdate($id,Request $req)
   	{

   		$validate = Validator::make($req->all(), [
			'username' => 'required|max:30',
			'fullname' => 'required|max:30',
            'password' => 'required',
            'email' => 'required|email'
        ]);

    	if ($validate->fails()) {
    		return redirect('/mamber/profile')
                        ->withErrors($validate)
                        ->withInput();
    	}

    	else
    	{
    		$data =User::where('username',$req->session()->get('userid'))->first();
   			$user = User::find($data->toArray()['id']);
            
			   $user->username = $req->username;
			   $user->fullname = $req->fullname;
			   $user->email = $req->email;
			   $user->password = $req->password;
			   

   			if ($user->password!=$req->password) {
   				return redirect('/mamber/profile')->withErrors("Current Password not matching");
   			}
   			else
   			{
   				if ($user->save()) {
	   				return redirect('/mamber/profile')->withErrors("Profile Update successfully");
		   		}
		   		else
		   		{
		   			echo "Something wrong";
		   		}
   			}

	   		
    	}
   		
   	}


   	
}
