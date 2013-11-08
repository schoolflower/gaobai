<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 10
 * Date: 13-11-8
 * Time: 上午9:40
 * To change this template use File | Settings | File Templates.
 */
class System {
    private $_id;
    private $_name;
    private $_loginUrl;
    private $_formInfo;
    private $_validateCodeUrl;
    private $_loginSuccessStr;

    public function __construct($arr = array()) {
        $this->_id = isset($arr['id']) ? $arr['id'] : '';
        $this->_name = isset($arr['name']) ? $arr['name'] : '';
        $this->_loginUrl = isset($arr['loginUrl']) ? $arr['loginUrl'] : '';
        $this->_formInfo = isset($arr['formInfo']) ? $arr['formInfo'] : array();
        $this->_validateCodeUrl = isset($arr['validateCodeUrl']) ? $arr['validateCodeUrl'] : '';
        $this->_loginSuccessStr = isset($arr['loginSuccessStr']) ? $arr['loginSuccessStr'] : '';
    }

    public function login() {

    }

    public static function getValidateCode($validateCodeUrl) {
        $curl = new Curl();
    }
}