<?php


echo '<pre>';
$arr = load_file('movies');
var_dump($arr);
echo '</pre>';    



function load_file ($file_name){
    $file = $file_name.'.dat';
    $arr = fopen($file,'r');
    $i = 1;
    while (!feof($arr)){
        $movies[$i] = explode('::',fgets($arr));
        $i++;
    }
    return $movies;
}