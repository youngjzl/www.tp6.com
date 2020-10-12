<?php
namespace app\controller;

use app\BaseController;

class DemoController extends BaseController
{
    public function show()
    {
        $res=[
            'status'=>1,
            'message'=>'我是提示消息',
            'data'=>['正常的','我是数据信息']
        ];
        $header=[
            'Token'=>'gt2001cdc'
        ];
        return json($res,201,$header);
    }

    public function request(){
        //第一种方式得到参数
        dump($this->app->request->get());
        dump($this->app->request->post());
        dump($this->app->request->param('abc',1,'intval'));
    }
}
