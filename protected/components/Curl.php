<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 10
 * Date: 13-11-8
 * Time: 上午10:40
 * To change this template use File | Settings | File Templates.
 */
class Curl {
    private $_ip;
    private $_userAgent;
    private $_isSaveCookie;
    private $_isSendCookie;
    private $_cookieFile;
    private $_referrer;
    private $_reqUrl;
    private $_timeOut;
    private $_reqMethod;
    private $_postInfo;
    private $_needConvertEncoding;
    private $_fromEncoding;
    private $_toEncoding;

    private $_options = array(); //curl请求参数
    private $_error;
    private $_output;

    public function __construct($arr = array()) {
        $this->_ip = isset($arr['ip']) ? $arr['ip'] : '';
        $this->_userAgent = isset($arr['userAgent']) ? $arr['userAgent'] : DEFAULT_USERAGENT;
        $this->_isSaveCookie = isset($arr['isSaveCookie']) ? $arr['isSaveCookie'] : false;
        $this->_isSendCookie = isset($arr['isSendCookie']) ? $arr['isSendCookie'] : false;
        $this->_cookieFile = isset($arr['cookieFile']) ? $arr['cookieFile'] : DEFAULT_COOKIE_FILE_NAME;
        $this->_referrer = isset($arr['referrer']) ? $arr['referrer'] : '';
        $this->_reqUrl = isset($arr['reqUrl']) ? $arr['reqUrl'] : '';
        $this->_timeOut = isset($arr['timeOut']) ? $arr['timeOut'] : CURL_TIMEOUT;
        $this->_reqMethod = isset($arr['reqMethod']) ? $arr['reqMethod'] : 'GET';
        $this->_postInfo = isset($arr['postInfo']) ? $arr['postInfo'] : array();
        $this->_needConvertEncoding = isset($arr['needConvertEncoding']) ? $arr['needConvertEncoding'] : false;
        $this->_fromEncoding = isset($arr['fromEncoding']) ? $arr['fromEncoding'] : '';
        $this->_toEncoding = isset($arr['toEncoding']) ? $arr['toEncoding'] : '';
    }

    private function _setOptions() {
        if ($this->_reqUrl) {
            $this->_options[CURLOPT_URL] = $this->_reqUrl;
        }
        if ('POST' === $this->_reqMethod && !empty($this->_postInfo)) {
            $this->_options[CURLOPT_POST] = 1;
            $this->_options[CURLOPT_POSTFIELDS] = $this->_postInfo;
        }
        if ($this->_isSendCookie) {
            $this->_options[CURLOPT_COOKIEFILE] = $this->_cookieFile;
        }
        if ($this->_isSaveCookie) {
            $this->_options[CURLOPT_COOKIEJAR] = $this->_cookieFile;
        }
        if ($this->_userAgent) {
            $this->_options[CURLOPT_USERAGENT] = $this->_userAgent;
        }
        $this->_options[CURLOPT_RETURNTRANSFER] = 1;
    }

    public function request() {
        $this->_setOptions();
        $ch = curl_init();
        curl_setopt_array($ch, $this->_options);
        $output = curl_exec($ch);
        if ($output === FALSE) {
            $this->_error = curl_exec($ch);
            curl_close($ch);
            return;
        }
        if ($this->_needConvertEncoding) {
            $this->_output = iconv($this->_fromEncoding, $this->_toEncoding, $output);
        } else {
            $this->_output = $output;
        }
        curl_close($ch);
    }

    public function getError() {
        return $this->_error();
    }

    public function getOutput() {
        return $this->_output;
    }
}