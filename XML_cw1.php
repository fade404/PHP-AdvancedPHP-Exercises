<?php

$data = simplexml_load_file('./xml/reed.xml', 'SimpleXMLIterator');
/*
echo '<pre>';
//var_dump($data);exit;
foreach($data as $name=>$d) {
    var_dump($name, $d, $d->hasChildren(), $d->getChildren());
    foreach($d as $n=>$v) {
        var_dump($n, $v, $v->hasChildren(), $v->getChildren());
    }

}
echo '</pre>';*/

$data = simplexml_load_file('./xml/reed.xml');
//echo '<pre>';var_dump($data);
/*
echo '<table>';
foreach($data->children() as $course) {
    echo '<tr>';
    foreach($course->children() as $data) {
        echo '<td><pre>';
        echo $data->getName(). ': '. $data;
        echo '</td>';
    }
    echo '</tr>';exit;
}
echo '</table>';*/


echo '<table>';
foreach($data->course as $c) {
    echo '<tr>';
    
    
    $vars = get_object_vars($c);
//    var_dump($vars);exit;
    foreach($vars as $name=>$value) {
        echo '<td>';
        if(is_object($value))
        {
            foreach($value as $n=>$v) {
                echo $v.'&nbsp;';
            }
            
            echo '('.$value->getName().')';
        } 
        else {
            echo $value;
        }
        echo '</td>';
    }
    echo '<tr>';
}
echo '</table>';
