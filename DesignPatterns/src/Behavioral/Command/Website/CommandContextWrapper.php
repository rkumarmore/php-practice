<?php
namespace App\Behavioral\Command\Website;

class CommandContextWrapper{
    private $params = [];
    private $error = '';
    public function __construct(){
        $this->params = $_REQUEST;
    }
    public function getParam(string $key){
        if(isset($this->params[$key])){
            return $this->params[$key];
        }
            return null;
    }
    public function setParam($key, $value){
        $this->params[$key] = $value;
    }

    public function getError(): string{
        return $this->error;
    }
    public function setError(string $error){
        $this->error = $error;
    }
}