<?php

class Client extends User {

    public function checkLogin($password) {
        if (mb_strlen($password) >= 8 && $this->password===$password){
            return TRUE;
        }
        return FALSE;
    }

    public function setPassword($password) {

        return true;
    }

}

