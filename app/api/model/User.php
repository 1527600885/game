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
namespace app\api\model;

use think\Model;
use think\model\concern\SoftDelete;

class User extends Model
{
    use SoftDelete;
    protected $deleteTime = 'delete_time';
    // 设置json类型字段
    protected $json = ['field','other_accounts'];
    protected $jsonAssoc = true;

    // 关联模型
    public function group()
    {
        return $this->hasOne(UserGroup::class, 'id', 'group_id')->bind([
            'group_title' => 'title'
        ]);
    }

    // 获取器
    public function getUrlAttr($value, $array)
    {
        return index_url('user/info', ['id' => $array['id']]);
    }
    
    public function getPasswordAttr($value, $array)
    {
        return '';
    }
    
    public function getPayPaaswordAttr($value, $array)
    {
		if($value){
			return 1;
		}else{
			return 0;
		}
    }
    
    public function getLoginIpAttr($value, $array)
    {
        return '';
    }
    
    public function getEmailAttr($value, $array)
    {
        return ! empty($value) ? substr_replace($value,'****',3,4): '';
    }

    public function getMobileAttr($value, $array)
    {
        return ! empty($value) ? substr_replace($value,'****',3,4) : '';
    }
    
    // 修改器
    public function setPasswordAttr($value, $array)
    {
    	if (! empty($value)) {
    		$password = password_hash($value, PASSWORD_BCRYPT, ['cost' => 12]);	
	        $this->set('password', $password);
    	}
    }
    public function setOtherAccountsAttr($value,$array)
    {
        if(!empty($value)) $value = json_encode($value);
        return $value;
    }
}