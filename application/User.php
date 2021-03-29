<?php

namespace application;

class User{
    protected $username;
    protected $password;

    function __construct($user,$pw)
    {
        $this->username = $user;
        $this->password = $pw;
    }

    function login(){
        
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setUsername($user)
    {
        $this->username = $user;
    }

    public function setPassword($pw)
    {
        $this->password = $pw;
    }
}

?>