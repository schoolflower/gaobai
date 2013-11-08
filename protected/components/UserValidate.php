<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 10
 * Date: 13-11-8
 * Time: 上午9:27
 * To change this template use File | Settings | File Templates.
 */

class UserValidate {
    private $_type;
    private $_id;
    private $_password;
    private $_validateCode;
    private $_schoolSystem;

    public function __construct($id, $password, $schoolSystem, $validateCode='', $type='') {
        $this->_id = $id;
        $this->_password = $password;
        $this->_validateCode = $validateCode;
        $this->_type = $type;
        $this->_schoolSystem = $schoolSystem;
    }

    private function _checkIdentity() {

    }


}