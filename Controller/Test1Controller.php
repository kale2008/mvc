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

    public function delUser(){
        echo '删除成功1111111111111111111111111111111';
    }
}