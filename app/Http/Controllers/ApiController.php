<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller{
    /**
     * 返回图文混合的列表
     */
    public function getPtext(){
        $res = DB::table('ptext')->get();
        if(!$res){
            $res = [];
        }
        echo json_encode(['status'=>true,'data'=>$res],JSON_UNESCAPED_UNICODE);
        exit;
    }
}