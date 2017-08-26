<?php

$arr = file('movies.dat');
foreach ($arr as $value) {
    $movie[] = explode('::',$value);
}


echo '<pre>';
var_dump($movie);
echo '</pre>';