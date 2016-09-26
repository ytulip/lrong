<?php
namespace App\Util;

trait Auth{
    public function checkAuth(){
        if(\Illuminate\Support\Facades\Auth::check()){
            return true;
        }else{
            echo json_encode(['status'=>false,'data'=>'登录信息丢失！','msg'=>-1],JSON_UNESCAPED_UNICODE);
            exit;
        }
    }
}