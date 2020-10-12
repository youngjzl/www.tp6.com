<?php
namespace app\controller;

use app\BaseController;

class DemoController extends BaseController
{
    public function show()
    {
        $res=[
            'code'=>1,
            'message'=>'我是提示消息',
            'data'=>['正常的','我是数据信息']
        ];

        return json($res,200);
    }
}
