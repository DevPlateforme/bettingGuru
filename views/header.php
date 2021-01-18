<html>

<head>

<meta charset='UTF-8'>

<title>Betting Guru</title>


</head>

<body>


<header>


<?php 

   $rootUrl = "http://localhost/bettingguru";

   $ligue1Id = "2664";

   $premierLeagueId = "2790";

   $ligaId = "2833";

   $bundesligaId = "2755";

   $serieAId = "2857";

?>


<style>
  #navbar{


      display: flex;

      position: fixed;

      top: 0px;

      left: 0px;

      height: 10vh;

      width: 100vw;

      justify-content: space-between;
  }

</style>


    <div id='navbar'>

        <a href="<?php echo $rootUrl ?>?championshipId=<?php echo $ligue1Id ?>"><div>Ligue1</div></a>
        <a href="<?php echo $rootUrl ?>?championshipId=<?php echo $premierLeagueId ?>"><div>premier League</div></a>
        <a href="<?php echo $rootUrl ?>?championshipId=<?php echo $ligaId ?>"><div>Liga</div></a>
        <a href="<?php echo $rootUrl ?>?championshipId=<?php echo $bundesligaId ?>"><div>BundesLiga</div></a>
        <a href="<?php echo $rootUrl ?>?championshipId=<?php echo $serieAId ?>"><div>Serie A</div></a>


    </div>



</header>
    
