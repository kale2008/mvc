<?php
class Test1Controller{
    public $username;
    public $password;
    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function login(){
       echo '登录成功！！！';
    }
}