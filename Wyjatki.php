<?php
class FirstException extends Exception {}
class SecondException extends Exception {}
class ThirdException extends Exception {}
class FourthException extends Exception {}

function checkPassword($pass) {

    if (!preg_match('/.{10,15}/', $pass)) {
        
        throw new FirstException('first');
    }
    if (!preg_match('/.[a-z]{1,}/', $pass)) {
        throw new SecondException('second');
    }
    if (!preg_match('/.[A-Z]{1,}/', $pass)) {
        throw new ThirdException('third');
    }

    if (preg_match('#[a-z]{2,}|[A-Z]{2,}#', $pass)) {
        throw new FourthException('fourth');
    }
    return true;
}

try {
    checkPassword('5616a7880AA8098067');
} catch (FirstException $ex) {
    echo $ex->getMessage();
} catch (SecondException $ex) {
    echo $ex->getMessage();
} catch (ThirdException $ex) {
    echo $ex->getMessage();
} catch (FourthException $ex) {
    echo $ex->getMessage();
}
catch (Exception $ex) {
    echo 'inny';
}



