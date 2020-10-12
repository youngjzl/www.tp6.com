<?php
/**
 * 不需要继承BasController得到参数
 * 时间：2020-10-12 16:44:33
 */
namespace app\controller;


use think\Request;
use think\facade\Request as Rqs;

class Learn
{
    public function index(Request $request){
        //第一种方式得到参数在DemoController里面

        //第二种方式得到参数
        dump(input('abc'));//此方法比较常用
        //第三种方式得到参数
        dump($request->param('abc'));
        //第四种方式得到参数
        dump(request()->param('abc'));
        //第五种方式得到参数
        dump(Rqs::param('abc'));

        //判断是何种请求
        $request->isAjax();
        $request->isGet();
        $request->isPost();
    }
}