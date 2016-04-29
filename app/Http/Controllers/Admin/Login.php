<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function showLogin()
    {
        return view('admin/index');
    }
    public function doLogin()
    {
        
        $rules = array(
            'email' => 'required|email',
            'password' => 'required',
        );
        $validator = Validator::make(Input::all(),$rules);
        
        if($validator->fails()){
            return Redirect::to('admin')
                -> withErrors($validator)
                -> withImput(Input::except('password'));
        }
        else{
            $dataToLogin = array(
                "email" => Input::get('email'),
                "password" => Input::get('password'),
            );
            if(Auth::attempt($dataToLogin)){
                echo "i am logged in!";
            }
            else{
                echo "error. return to login!";
            }
        }
        
        
        return view('admin/index');
    }
}
//install and configure form:
//https://www.flynsarmy.com/2015/02/install-illuminatehtml-laravel-5/
//http://www.easylaravelbook.com/blog/2015/06/02/laravel-passing-variables-from-the-controller-to-view/