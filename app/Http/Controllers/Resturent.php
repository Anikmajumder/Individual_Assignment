<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Subcategory;
use App\resturentmodel;

class Resturent extends Controller
{
    public function index()
    {
    	return view('admin.resturent');
	}
	public function edit($id){
        $user = resturentmodel::find($id);
        return view('resturent.editresturent', $user);
    }
	
	public function resturentlist()
   	{
   		$data = resturentmodel::all();

   		return view('resturent.resturentlist',['details'=>$data]);
	 }
	   public function addresturent()
   	{
		return view('resturent.Addresturent');
	}
	   
	public function add(Request $req)
    {
    	$validate = Validator::make($req->all(), [
            'name' => 'required|max:20',
            'foodname' => 'required|max:10',
            'rate' => 'required',
            
        ]);

    	if ($validate->fails()) {
    		return redirect('/admin/resturent/addresturent')
                        ->withErrors($validate)
                        ->withInput();
    	}
    	else
    	{
    		$user = new resturentmodel;
            
            $user->name = $req->name;
            $user->foodname = $req->foodname;
			$user->rate = $req->rate;
			$user->borrow = NULL;
			$user->comment = NULL;
			$user->id = NULL;
            

            if ($user->save()) {
                return redirect('/admin/resturent/resturentlist');
            }               
            else
            {
                return redirect('/Resturent add failed')
                                ->withErrors('Resturnet add failid');
            }
    	}
	}

	
}
