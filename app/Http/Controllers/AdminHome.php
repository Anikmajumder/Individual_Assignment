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

   	public function profileUpdate(Request $req)
   	{

   		$validate = Validator::make($req->all(), [
			'name' => 'required|max:8',
			'username' => 'required|max:8',
            'password' => 'required',
            'email' => 'required|email'
        ]);

    	if ($validate->fails()) {
    		return redirect('/admin/profile')
                        ->withErrors($validate)
                        ->withInput();
    	}

    	else
    	{
    		$data =User::where('username',$req->session()->get('userid'))->first();
   			$user = User::find($data->toArray()['id']);

			   $user->username = $req->username;
			   $user->name = $req->name;
   			   $user->email = $req->email;

   			
   				if ($user->save()) {
	   				return redirect('/admin/profile')->withErrors("Profile Update successfully");
		   		}
		   		else
		   		{
		   			echo "Something wrong";
		   		}
   			

	   		
    	}
   		
   	}


	   public function mamberlist()
   	{
   		$data = User::all();

   		return view('admin.mamberlist',['details'=>$data]);
   	}
	   public function deletemamber($id)
   	{
   		$user = User::destroy($id);
   		return redirect('/admin/mamberlist')->withErrors("User deleted");
   	}

}
