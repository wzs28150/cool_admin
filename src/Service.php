<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wzs
 * @Date: 2020-03-20 14:58:40
 * @LastEditors: sueRimn
 * @LastEditTime: 2020-03-20 15:12:15
 */


namespace wzs\cooladmin;

class Service extends \think\Service
{
    public function boot()
    {
        $this->commands([
            \wzs\cooladmin\command\Admin::class,
            \wzs\cooladmin\command\tools\Repwd::class
        ]);
        $this->app->middleware->add(\think\middleware\SessionInit::class);
        $this->loadRoutesFrom(__DIR__.DIRECTORY_SEPARATOR.'route'.DIRECTORY_SEPARATOR.'Route.php');
    }
}
