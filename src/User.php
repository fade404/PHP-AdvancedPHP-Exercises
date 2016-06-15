<?php

abstract class User {

    protected $userName;
    protected $password;

    public function __construct($login='', $pass='') {
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





//$admin= new Admin('piotrek', 'niedzwiedz12');
//var_dump($admin->login('piotrek', 'niedzwiedz12'));

//$client = new Client('lukasz', 'niedzwiedz12');

