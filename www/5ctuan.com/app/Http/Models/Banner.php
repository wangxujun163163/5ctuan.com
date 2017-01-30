<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
   

    const USER_TYPE_SUPER = 1;   //超级管理员
    const USER_TYPE_USER = 2;   //用户
    public static function getUserTypes() 
    {
        return [
            self::USER_TYPE_SUPER => '超级管理员',
            self::USER_TYPE_USER => '普通管理员',
        ];
    }

    public static function getTypes() 
    {
        return [
            1 => '开机图片',
            2 => '首页',
            3 => '商城',
  
        ];
    }

    /**
     * 建议图片尺寸
     * @return [type] [description]
     */
    public static function getSizes() 
    {
        return [
            1 => [750, 1070],
            2 => [750, 280],
            5 => [720, 160],
        ];
    }

    public static function getDevices() 
    {
        return ['ios' => 'iOS', 'android' => 'Android'];
    }

    // public function getImgAttribute($value)
    // {
    //     return $value ? config('app.cdn_url') . $value : '';
    // }
}
