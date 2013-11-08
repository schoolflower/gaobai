<?php
return array(
    'charset' => 'utf-8',//页面字符集
    'cookiepre' => 'txing_', //COOKIE前缀
    'cookiedomain' => strstr($_SERVER['HTTP_HOST'], '.'), //COOKIE作用域
    'cookiepath' => '/', //COOKIE作用路径
    'timezone' => 'Asia/Shanghai',//时区
    'login_url'  => 'http://',
);
?>