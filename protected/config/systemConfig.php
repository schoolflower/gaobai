<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 10
 * Date: 13-11-8
 * Time: 下午4:16
 * To change this template use File | Settings | File Templates.
 */

return array(
    'names' => array(
        1 => 'zhku'
    ),

    'validateCodeUrls' => array(
        1 => 'http://jw.zhku.edu.cn/jwmis/sys/ValidateCode.aspx',
    ),

    'loginInfo' => array(
        1 => array(
            'loginUrl' => 'http://jw.zhku.edu.cn/jwmis/_data/index_LOGIN.aspx',
            'type' => array('Sel_Type'=>'STU'),
            'id' => 'UserID',
            'password' => 'PassWord',
            'validateCode' => 'cCode',
            'loginSuccessStr' => '正在加载权限数据...',
            'referrer' => 'http://jw.zhku.edu.cn/jwmis/_data/index_LOGIN.aspx',
            'fromEncoding' => 'GB2312',
            'toEncoding' => 'UTF-8',
        )
    ),











);