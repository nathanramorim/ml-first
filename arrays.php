<?php

// MOVIES
//////////////////////////
$array_movies = array();
$movies = fopen('archives/movies.dat','r') or die('fail to open file');

while(!feof($movies)):

    $row = fgets($movies);
    list($movie_id, $name, $category) = explode('::', $row);
    $array = array('name' => $name, 'category' => $category);
    array_push($array_movies, $array);

endwhile;
fclose( $movies );

// Separa dados dos usuários
$qtd_movies = sizeof($array_movies);
$genres = array();
$genres['action']      = 0;
$genres['adventure']   = 0;
$genres['animation']   = 0;
$genres['children']    = 0;
$genres['comedy']      = 0;
$genres['crime']       = 0;
$genres['documentary'] = 0;
$genres['drama']       = 0;
$genres['fantasy']     = 0;
$genres['filmnoir']    = 0;
$genres['horror']      = 0;
$genres['musical']     = 0;
$genres['mystery']     = 0;
$genres['romance']     = 0;
$genres['sciri']       = 0;
$genres['thriller']    = 0;
$genres['war']         = 0;
$genres['western']     = 0;


for ($i=0; $i <= $qtd_movies; $i++) {

    // Generos
    if (strpos($array_movies[$i]['category'], 'Action') !== false) $genres['action']++;
    if (strpos($array_movies[$i]['category'], 'Adventure') !== false) $genres['adventure']++;
    if (strpos($array_movies[$i]['category'], 'Animation') !== false) $genres['animation']++;
    if (strpos($array_movies[$i]['category'], "Children's") !== false) $genres['children']++;
    if (strpos($array_movies[$i]['category'], 'Comedy') !== false) $genres['comedy']++;
    if (strpos($array_movies[$i]['category'], 'Crime') !== false) $genres['crime']++;
    if (strpos($array_movies[$i]['category'], 'Documentary') !== false) $genres['documentary']++;
    if (strpos($array_movies[$i]['category'], 'Drama') !== false) $genres['drama']++;
    if (strpos($array_movies[$i]['category'], 'Fantasy') !== false) $genres['fantasy']++;
    if (strpos($array_movies[$i]['category'], 'Film-Noir') !== false) $genres['filmnoir']++;
    if (strpos($array_movies[$i]['category'], 'Horror') !== false) $genres['horror']++;
    if (strpos($array_movies[$i]['category'], 'Musical') !== false) $genres['musical']++;
    if (strpos($array_movies[$i]['category'], 'Mystery') !== false) $genres['mystery']++;
    if (strpos($array_movies[$i]['category'], 'Romance') !== false) $genres['romance']++;
    if (strpos($array_movies[$i]['category'], 'Sci-Fi') !== false) $genres['sciri']++;
    if (strpos($array_movies[$i]['category'], 'Thriller') !== false) $genres['thriller']++;
    if (strpos($array_movies[$i]['category'], 'War') !== false) $genres['war']++;
    if (strpos($array_movies[$i]['category'], 'Western') !== false) $genres['western']++;

}


// USERS
//////////////////////////
$array_users = array();
$users = fopen('archives/users.dat','r') or die('fail to open file');

while(!feof($users)):

    $row = fgets($users);
    list($movie_id, $genre, $age, $ocupation, $zipcode) = explode('::', $row);
    $array = array('movie_id' => $movie_id, 'genre' => $genre, 'age' => $age, 'ocupation' => $ocupation, 'zipcode' => $zipcode);
    array_push($array_users, $array);

endwhile;
fclose( $users );


// Separa dados dos usuários
$qtd_users = sizeof($array_users);
$data_users = array();
$data_users['gen_F']  = 0;
$data_users['gen_M']  = 0;
$data_users['age_1']  = 0;
$data_users['age_18'] = 0;
$data_users['age_25'] = 0;
$data_users['age_35'] = 0;
$data_users['age_45'] = 0;
$data_users['age_50'] = 0;
$data_users['age_56'] = 0;


for ($i=0; $i < $qtd_users; $i++) {

    // Sexo
    if ($array_users[$i]['genre'] === 'M') $data_users['gen_M']++;
    if($array_users[$i]['genre'] === 'F') $data_users['gen_F']++;

    // Idade
    if($array_users[$i]['age'] == 1) $data_users['age_1']++;
    if($array_users[$i]['age'] == 18) $data_users['age_18']++;
    if($array_users[$i]['age'] == 25) $data_users['age_25']++;
    if($array_users[$i]['age'] == 35) $data_users['age_35']++;
    if($array_users[$i]['age'] == 45) $data_users['age_45']++;
    if($array_users[$i]['age'] == 50) $data_users['age_50']++;
    if($array_users[$i]['age'] == 56) $data_users['age_56']++;

}



// RATINGS
//////////////////////////
$array_ratings = array();
$ratings = fopen('archives/ratings.dat','r') or die('fail to open file');

while(!feof($ratings)):

    $row = fgets($ratings);
    list($usr_id, $movie_id, $rate, $time) = explode('::', $row);
    $array = array('usr_id' => $usr_id, 'movie_id' => $movie_id, 'rate' => $rate, 'time' => $time);
    array_push($array_ratings, $array);

endwhile;
fclose( $ratings );

// Separa dados das avaliações
$qtd_ratings = sizeof($array_ratings);
$data_ratings = array();
// var_dump($array_ratings);
?>