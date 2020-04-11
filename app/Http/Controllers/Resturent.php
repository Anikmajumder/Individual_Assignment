<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Borrow;
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
	
	public function borrow($id){
        $user = resturentmodel::find($id);
        return view('mamber.borrow', $user);
    }
	
	public function search(Request $request)
   	{
		   $search=$request->get('search');

   		$data = resturentmodel::where('foodname','like','%'.$search.'%')->paginate(5);

   		return view('mamber.resturentlist',['details'=>$data]);
	 }
	public function resturentlist()
   	{
   		$data = resturentmodel::all();

   		return view('resturent.resturentlist',['details'=>$data]);
	 }
	 public function resturentlistmamber()
	 {
		 $data = resturentmodel::all();

		 return view('mamber.resturentlist',['details'=>$data]);
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

	public function delete($id)
	{
		$user = resturentmodel::destroy($id);
		return view('resturent.resturentlist');
	}

	public function addedit(Request $req)
    {
    	$validate = Validator::make($req->all(), [
            'name' => 'required|max:20',
            'foodname' => 'required|max:10',
			'rate' => 'required',
			'comment' => 'required'
            
        ]);

    	if ($validate->fails()) {
    		return redirect('/admin/resturent/resturentlist')
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
			$user->comment = $req->comment;
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


	public function borrowedit($id,Request $req)
    {
    	$validate = Validator::make($req->all(), [
            
			'comment' => 'required'
            
        ]);

    	if ($validate->fails()) {
    		return redirect('/mamber/resturent/resturentlist')
                        ->withErrors($validate)
                        ->withInput();
    	}
    	else
    	{
    		
            
			$user = Borrow::find($id);
			
			$user->borrow += 1;
            
			$user->comment = $req->comment;
			
            

            if ($user->save()) {
                return view('mamber.order');
            }               
            else
            {
                return redirect('/mamber/resturent/borrow ')
                                ->withErrors('order place failid');
            }
    	}
	}


	
}
