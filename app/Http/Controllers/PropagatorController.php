<?php
namespace App\Http\Controllers;


use App\Models\BelieverModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class PropagatorController extends Controller{

    use \App\Util\Auth;

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

    public function postBeliever(){
        $this->checkAuth();
        $obj = BelieverModel::firstOrCreate(['name'=>Request::input('name')]);
        $obj->setAttr(array_only(Request::all(),['sex','age','nativeplace','mobile','address','status']));
        $obj->save();
        return Response::json(['status'=>true]);
    }
}