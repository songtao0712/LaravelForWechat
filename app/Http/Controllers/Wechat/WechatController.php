<?php
/**
 * Created by PhpStorm.
 * User: sont
 * Date: 2018/5/8
 * Time: 20:36
 */
namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class WechatController extends Controller
{

    public function serve()
    {
        echo $_GET['echostr'];
    }
}