<?php
namespace App\Util;
/**
 * 系统里面用到的select选择框
 * Class Selects
 * @package App\Util
 */
class Selects{
    static private  function selectedCallBack($name,$value,$callback){
        $defaultAttr = array(
            'name'=>'',
            'class'=>'form-control grayborder',
            'defaultNull'=>true,
        );

        if(is_array($name)) {
            $config = array_merge($defaultAttr, $name);
        }else{
            $defaultAttr['name'] = $name;
            $config = $defaultAttr;
        }

        $res = $callback();
        $str = sprintf('<select name="%s" class="%s" %s>',$config['name'],$config['class'],isset($config['id'])?'id="' . $config['id'] . '"':'');

        if(isset($config['defaultNull']) && ($config['defaultNull']= true) || !$value){
            $str .= '<option value="">--请选择--</option>';
        }

        foreach($res as $item){
            $str .= sprintf('<option value="%s" %s>%s</option>',$item->ITEMNO,(($item->ITEMNO == $value) && ($value !== false))?'selected':'',$item->ITEMNAME);
        }
        $str .= "</select>";
        return $str;
    }

    /**
     * 是和否
     * @param $name
     * @param bool $value
     * @return string
     */
    static public function yesOrNo($name, $value=false){
        return self::selectedCallBack($name,$value,function(){
            $config = [
                ['ITEMNO'=>1,'ITEMNAME'=>'是'],
                ['ITEMNO'=>2,'ITEMNAME'=>'否']
            ];
            return (Object)array_map(function($item){
                return (Object)$item;
            },$config);
        });
    }


}