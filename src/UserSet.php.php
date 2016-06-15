<?php

require_once './cwiczenie1.php';

class UserSet implements Iterator {
    
    protected $userSet = [];
    protected $position = 0;

    public function Add(User $user) {

        $this->userSet[] = $user;
    }
    
    public function __construct () {
        $this->position = 0;
    }
    
    public function rewind() {
        $this->position = 0;
    }
    
    function current() {
        //var_dump(__METHOD__);
        return $this->userSet[$this->position];
    }

    function key() {
        return $this->position;
    }

    function next() {
        ++$this->position;
    }

    function valid() {
        return isset($this->userSet[$this->position]);
    }
    
    public function checkLogin ($pass) {
        $users = [];
        
        foreach ($this->userSet as $value) {
            if ($value->login('', $pass)) {
                $users[] = $value;
            }
        }
        return $users;
    }

}

$users = new UserSet();
$users->Add($admin);
$users->Add($client);

$admin1 = new Admin('mateusz', 'niedzwiedz12');
$users->Add($admin1);

//$tablica = [];
//$users->Add($tablica);  powoduje blad bo nie jest obiektem klasy User

//foreach ($users as $value) {
//    var_dump($value);
//}

var_dump($users->checkLogin('niedzwiedz12'));
