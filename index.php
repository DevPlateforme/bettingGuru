<?php

require_once 'db/connexion.php';

require_once 'const.php';

require_once 'controllers/leaguesController.php';


require_once 'views/header.php';




$request = $_SERVER['REQUEST_URI'];

//HERE IS OUR ROUTER. ALL THE REQUESTS ARE DIRECTED THERE USING THE HTACCESS FILE. WE THEN DIRECT THE REQUESTS AS WE PLEASE.

$root = '/bettingguru/';




switch ($request) {
    case $root :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;


    case $root . 'game' :

        require __DIR__ . '/views/templates/onegame.php';

        break;

    //case $root . "?championshipId=" . $_GET["championshipId"];

        //seeOneChampionship($_GET["championshipId"]);

        //break;
    

    //case $root . "?championshipId=" . $_GET['championshipId'] . '&gameId=' . $_GET['gameId'];

        //seeOneGame($_GET['gameId']);

       //break;
      
              
    default:
        http_response_code(404);

        echo 'error';

        break;
}

