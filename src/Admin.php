<?php

class Admin extends User {
    
    const IP = '::1';
            
    public function checkLogin($password) {
        if (mb_strlen($password) >= 10 && $_SERVER['REMOTE_ADDR']=== Admin::IP  && $this->password===$password){
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