<?php

class Response
{
    private $_success;
    private $_httpStatusCode;
    private $_messages = array();
    private $_data;
    private $_toCache = false;
    private $_responseData = array();

    /* ======== [ Set value to private variable ] =======*/

    //$_success
    public function setSuccess($success)
    {
        $this->_success = $success;
    }

    //$_httpStatusCode
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->_httpStatusCode = $httpStatusCode;
    }

    //$_messages
    public function addMessage($message)
    {
        $this->_messages[] = $message;
    }

    //$_data
    public function setData($data)
    {
        $this->_data = $data;
    }

    //$_toCache
    public function setToCache($toCache)
    {
        $this->_toCache = $toCache;
    }

    /* ======== [ Response prepare ] =======*/
    public function send()
    {

        header('Content-type: application/json;charset=utf-8');

        if ($this->_toCache == true) {
            header('Cache-control: max-age=60');
        } else {
            header('Cache-control: no-cache, no-store');
        }

        if (($this->_success !== false && $this->_success !== true) || !is_numeric($this->_httpStatusCode)) {
            http_response_code(500);
            $this->_responseData['statusCode'] = 500;
            $this->_responseData['success'] = false;
            $this->addMessage("Response creaton error");
            $this->_responseData['messages'] = $this->_messages;
        } else {
            http_response_code($this->_httpStatusCode);
            $this->_responseData['statusCode'] = $this->_httpStatusCode;
            $this->_responseData['success'] = $this->_success;
            $this->_responseData['messages'] = $this->_messages;
            $this->_responseData['data'] = $this->_data;
        }

        echo json_encode($this->_responseData);
    }
}
