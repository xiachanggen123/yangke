<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

//Route::get('think', function () {
//    return 'hello,ThinkPHP6!';
//});

Route::get('', 'index');
Route::rule('home', 'Index/home');
Route::rule('getSession', 'Index/getSession');
Route::rule('getUuid', 'Index/getUuid');
Route::rule('getAllSession', 'Index/getAllSession');
Route::rule('text', 'Index/text');

