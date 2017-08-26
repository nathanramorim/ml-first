<?php
echo '<pre>';
$arr = load_file('movies');
$i = 0;
$movies[$i]['name'] = '';
$movies[$i]['category'] = '';
foreach ($arr as $value) {
    
    $movies[$i]['name'] = $value[1];
    $movies[$i]['category'] = $value[2];
    if(isset($value[3])){
        $movies[$i]['category'] .= '|'.$value[3];
    }
    $i++;
    
}
var_dump($movies);

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