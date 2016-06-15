<?php

$reader = new XMLReader();
$reader->open('./xml/uwm.xml');

//$reader->open($path_to_xml_file);

echo '<pre>';
$arr = array();
while($reader->read()) {
	if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'course_listing') {
		$doc = new DOMDocument('1.0', 'UTF-8');     //tworzymy nowy dokument DOM
		$partXml = $reader->expand();   //wczytuje caly element 'course_listing'
                $dom = $doc->importNode($partXml,true);     //dodajemy do pustego doc zawartosc $partXml
                $xml = simplexml_import_dom($dom);      
                
                var_dump((string) $xml->level);
                
                $level = (string) $xml->level[0];
                //var_dump($level);
		if(isset($arr[$level])) {
                    ++$arr[$level];
                }
                else {
                    $arr[$level] = 1;
                }
	}
}

var_dump($arr);         //wyswietlamy ile jest poszczegolnych elementow level