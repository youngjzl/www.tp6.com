<?php


namespace app\controller;


class Error
{
    public function __call($name,$parameters){
        $res=[
            'status'=>0,
            'message'=>'此控制器不存在',
            'data'=>[]
        ];
        return json($res,400);
    }
}