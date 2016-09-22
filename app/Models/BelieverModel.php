<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BelieverModel
 * @package App\Models
 */
class BelieverModel extends Model{
    protected $table = 'believer';
    protected $guarded = [];
    public $timestamps = false; //关闭时间戳更新


    /**
     * @param array $array
     * 批量设置属性
     */
    public function setAttr(Array $array){
        foreach($array as $key=>$val){
            $this->$key = $val;
        }
    }
}