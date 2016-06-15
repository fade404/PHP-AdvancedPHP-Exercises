<?php

abstract class User {

    protected $userName;
    protected $password;

    public function __construct($login = '', $pass = '') {
        $this->password = $pass;
        $this->userName = $login;
    }

    abstract public function checkLogin($password);

    abstract public function setPassword($password);

    final public function login($userName, $password) {
        if ($this->checkLogin($password)) {
            $this->userName = $userName;
            return true;
        }
        return FALSE;
    }

}

class Client extends User {

    public function checkLogin($password) {
        if (mb_strlen($password) >= 8 && $this->password === $password) {
            return TRUE;
        }
        return FALSE;
    }

    public function setPassword($password) {
        if ($this->checkLogin($password)) {
            $this->password = $password;
            return true;
        }
        return false;
    }

}

class Admin extends User {

    const IP = '::1';

    public function checkLogin($password) {
        if (mb_strlen($password) >= 10 && $_SERVER['REMOTE_ADDR'] === Admin::IP && $this->password === $password) {
            return TRUE;
        }
        return FALSE;
    }

    public function setPassword($password) {
        if ($this->checkLogin($password)) {
            $this->password = $password;
            return true;
        }
        return false;
    }

}

$admin = new Admin('piotrek', 'niedzwiedz12');
//var_dump($admin->login('piotrek', 'niedzwiedz12'));

$client = new Client('lukasz', 'niedzwiedz12');
