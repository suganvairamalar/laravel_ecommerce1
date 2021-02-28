<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function login(Request $req){
    	//return $req->input(); //get all input
    	$user =  User::where(['email'=>$req->email])->first();
    	if(!$user || !Hash::check($req->password,$user->password)){
    		return "Username or password is not matched";
    	}
    	else{
    		$req->session()->put('user',$user);
    		return redirect('/');
    	}

    }

    public function register(Request $req){
      //return $req->input(); //use to check 
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');

    }
}
