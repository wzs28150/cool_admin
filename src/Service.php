<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wzs
 * @Date: 2020-03-20 14:58:40
 * @LastEditors: sueRimn
 * @LastEditTime: 2020-03-21 09:17:26
 */


namespace wzs\cooladmin;

class Service extends \think\Service
{
    public function boot()
    {
        $this->app->middleware->add(\think\middleware\SessionInit::class);
        $this->loadRoutesFrom(__DIR__.DIRECTORY_SEPARATOR.'route'.DIRECTORY_SEPARATOR.'Route.php');
    }
}
