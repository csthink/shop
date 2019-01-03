<?php
/**
 * Created by PhpStorm.
 * User: mydu
 * Date: 2018-12-26
 * Time: 15:08
 */

// 将当前请求的路由名称转换为 CSS 类名称,允许我们针对某个页面做页面样式定制
function route_class()
{
    return str_replace(',', '-', Route::currentRouteName());
}

