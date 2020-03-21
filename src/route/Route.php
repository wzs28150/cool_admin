<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wzs
 * @Date: 2020-03-20 14:58:40
 * @LastEditors: sueRimn
 * @LastEditTime: 2020-03-21 09:28:00
 */

use think\facade\Route;


Route::group('admin', function () {
    Route::get('', 'wzs\cooladmin\controller\Index@index');
});
