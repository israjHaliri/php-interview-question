<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use Redirect;
use DB;

class TestingController extends Controller
{
    public function index(){
    	$myStr = str_random(20);
    	return View('testing', compact('myStr'));
    }

    public function load(){    	
    	$myStr = str_random(20);
    	$list_data = \App\User::all();
    	return $mydata = array(
    		'list_data' => $list_data, 
    		'myStr' => $myStr, 
    		);
    }

    public function insert() {

		$data = Input::all();
		
		$rule = array(
			'nama' => 'unique:users'
			);

		$message = array(
			'nama.unique' => 'Name Already Used.',
			);
		
		$validation = Validator::make($data, $rule, $message);
		
		if($validation->fails()) 
		{
			return "User Already Registered";
		} 
		else 
		{	
			$nama = Input::get('nama');
			$alamat = Input::get('alamat');
			$uuid = Input::get('uuid');
			
			$user_data =\App\User::create(compact('uuid', 'nama', 'alamat'));
			if ($user_data) 
			{
				return "Saved";
			}	
			else
			{
				return "Failed";
			}		
		}
	}
}
