<?php
// +----------------------------------------------------------------------
// | OneKeyAdmin [ Believe that you can do better ]
// +----------------------------------------------------------------------
// | Copyright (c) 2020-2023 http://onekeyadmin.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: MUKE <513038996@qq.com>
// +----------------------------------------------------------------------
namespace plugins\top\admin\model;

use think\Model;

class MkTopGame extends Model
{
    protected $name = "top_game";
    
    // 搜索器
    public function searchKeywordAttr($query, $value)
    {
    	if (! empty($value)) {
	        $query->where("gamename|gameImage","like", "%" . $value . "%");
	    }
    }
    
    public function searchDateAttr($query, $value, $array)
    {
        if (! empty($value)) { 
            $query->whereBetweenTime("", $value[0], $value[1]);
        }
    }
    public function getTypeTextAttr($value,$data)
    {
        return [1=>"Much wow Win",2=>"Top Win"][$data['type']];
    }
    public function getGameImageAttr($value){
        if(!empty($value)){
                if(stripos($value,"images.b51613.com") !== false){
                   return $value;
                }else if(stripos($value,"images.b728484.com:42666") !== false){
                    
                    return $value;
                }else{
                    return env('aws.imgurl').$value;
                }
            
        }
    }
}