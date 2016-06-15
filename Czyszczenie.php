<?php

function getFiles($path, & $files = array()) {
//    echo 'path: ' . $path . '<br/>';
    if (is_dir($path)) {
        if ($handle = opendir($path)) {
            while (false !== ($entry = readdir($handle))) {
//                echo 'entry: ' . $entry . '<br/>';
                if (is_file($path . $entry)) {
//                    echo 'is_file!<br/>';
                    $files[] = $path . $entry;
                } elseif ($entry != '.' && $entry != '..') {
//                    echo 'is_dir!<br/>';
                    getFiles($path . $entry . '/', $files);
                }
            }

//            echo 'unlink handle for: ' . $path . '<br/>';
            closedir($handle);
        }
    }

    return $files;
}

$files = getFiles(__DIR__ . '/');

function checkFile($sec, $files) {
    foreach ($files as $file) {
        $stat = stat($file);
        $timeMod = $stat['mtime'];      //czas modyfikacji
        $time = time();
        
        if (($time-$timeMod)>$sec) {
            echo 'usuwam plik' . $file . '<br>';
        }
    }
}

checkFile(3600, $files);

//echo '<pre>';
//var_dump(getFiles(__DIR__.'/'));

//$path = realpath(__DIR__.'/');
//$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
//foreach($objects as $name => $object){
//    var_dump($name, $object);
//}
