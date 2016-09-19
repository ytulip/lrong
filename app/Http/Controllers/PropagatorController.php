<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class PropagatorController extends Controller{

    public function getLogin(){
        return view('propagator.login');
    }

    public function postLogin(){
        if(Auth::attempt(array_only(Request::all(),['name','password']))){
            $res = ['status'=>true];
        }else{
            $res = ['status'=>false,'data'=>'账户名密码错误!'];
        }
        return Response::json($res);
    }

    public function getIndex(){
        return view('propagator.index');
    }
}