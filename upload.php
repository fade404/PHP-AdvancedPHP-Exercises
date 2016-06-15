<?php

//echo '<pre>';

$md5 = md5_file($_FILES['fileToUpload']['tmp_name']);
//$uploadfile = __DIR__ .'/upload/'. $md5;
$date = date('Y-m-d');

$firstTwo = substr($md5, 0, 2);
$lastTwo = substr($md5, -2);

$path = './upload/' . $date . '/' . $firstTwo . '/' .$lastTwo; 

if (!file_exists($path)) {
    mkdir($path, 0777, TRUE);
}

$uploadFile = $path . '/' . $md5;



if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadFile)) {
    if (substr($_FILES['fileToUpload']['type'], 0, 5) == 'image') {
//      echo '<img src="'.$uploadfile. '"></img>';
        header('Content-Type:'  . $_FILES['fileToUpload']['type']);
        readfile($uploadFile);
        
    }
} else {
    echo 'error';
}



