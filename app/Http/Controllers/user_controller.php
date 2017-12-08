<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
//khai bao db catalogue
use App\user;
use App\Http\Requests\user_request ; 

class user_controller extends Controller
{
    public function getUser () 
     {  
          $data = user:: select('id', 'name', 'email', 'quyen', 'password', 'remember_token', 'created_at', 'updated_at') -> get()->toArray();
          return view('user.list', compact('data'));
     } 

     public function addUser () 
     {  
          $data1 = user:: select('id', 'name', 'email', 'quyen', 'password', 'remember_token', 'created_at', 'updated_at') ->orderby('id', 'desc')-> get()->toArray();
          
          return view('user.add', compact('data1'));
     } 
	public function postUser(user_request $request) //dùng phương thức request mới tạo
     {    
     	$tl = new user;
          
     	 $tl ->name = $request ->txtName;
     	 $tl ->password = bcrypt($request ->txtPass); 
     	  $tl ->email = $request ->txtEmail; 
     	 $tl ->quyen = $request ->rdoLevel; 
     	 
          $tl -> save();
          return redirect() -> route('list_user')->with(['notification'=> 'Add successfull!','notification2'=> 'success' ]);
     } 

	public function loginUser ( ) //dùng phương thức request mới tạo
     { 


          return view('login');
     } 
     public function post_loginUser (Request $request) //dùng phương thức request mới tạo
     { 
     		if(Auth::attempt(['email'=>$request->txtemail,'password'=>$request->txtpassword]))
     			{
     				return redirect() -> route('list_user');
     			}
     			else
     			{
     				return redirect('user_login');
     			}

                
     } 
      
     
	
     
}




