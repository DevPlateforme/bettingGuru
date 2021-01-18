

<?php

  //collect the get request used to arrive on this page (championship id)

      $championshipId = $_GET["championshipId"];


  ?>


<h3>Semaine : <span id='weekSpan'></span> </h3>


<h3>Liste des matchs de <?php //echo $championshipName ?></h3> 


<h5>Games</h5>

<div id="gameListDiv">

</div>




<script>
    /*

    var dir = "http://localhost/bettingguru" + "?championshipId=" + "<?php //echo $championshipId ?>";


    var gameListDiv = document.getElementById('gameListDiv');


    var weekSpan = document.getElementById('weekSpan');

    //var currentWeek = JSON.parse(<?php //echo $currentWeek ?>);

    var currentGames =  JSON.parse(<?php //echo $weeklyGames ?>).api.fixtures;

    console.log(currentGames);

 
    for(gameIndex = 0; gameIndex < currentGames.length; gameIndex++){
        
     let gameDiv = document.createElement('div');
         

        gameDiv.innerHTML += (currentGames[gameIndex].homeTeam.team_name);

        gameDiv.innerHTML += (' - ');

        gameDiv.innerHTML += (currentGames[gameIndex].awayTeam.team_name);


        let gameLink = document.createElement('button');

        gameLink.setAttribute('onclick', "triggerController()");

        gameLink.innerHTML = 'get the odds for this game';

        
        let a = document.createElement('a');

        a.setAttribute('href', dir + '&gameId=' + currentGames[gameIndex].fixture_id);

        a.append(gameLink);


        gameDiv.append(a);


        gameListDiv.append(gameDiv);

    }


    //weekSpan.innerHTML = currentWeek;


*/
</script>

