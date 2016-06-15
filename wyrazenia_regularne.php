<?php

function checkPassword ($pass) {
    if (!preg_match('/.{10,15}/', $pass)){
        return 1;
    }
    if (!preg_match('/.[a-z]{1,}/', $pass)) {
        return 2;
    }
    if (!preg_match('/.[A-Z]{1,}/', $pass)) {
        return 3;
    }
    
    if (preg_match('#[a-z]{2,}|[A-Z]{2,}#', $pass)) {
        return 4;
    } 
    return true;
    
}
var_dump(checkPassword('kRoKoD54632985769'));




