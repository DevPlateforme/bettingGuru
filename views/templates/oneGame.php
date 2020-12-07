<h1> Match :</h1>


<h1 id='homeTeamHTML'>Equipe à domicile : </h1>


<h1 id='awayTeamHTML'>Equipe à l'extérieur : </h1>



<h1>Stats équipe à domicile : </h1>


<h1 id='homeTeamAverageGoalsForHTML' >Moyenne de buts marqués: </h1>

<h1 id='homeTeamAverageGoalsAgainstHTML' >Moyenne de buts encaissés: </h1>

<h1 id='adjustedHomeTeamGoalsFor' >Buts marqués ajustés : </h1>



<h1>Stats équipe à l'extérieur : </h1>


<h1 id='awayTeamAverageGoalsFor' >Moyenne de buts marqués: </h1>

<h1 id='awayTeamAverageGoalsAgainst' >Moyenne de buts encaissés: </h1>

<h1 id='adjustedAwayTeamGoalsFor' >Buts marqués ajustés : </h1>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jstat/1.9.4/jstat.min.js'></script>


<script>

   //DOM VARS

  var homeTeamHTML = document.getElementById('homeTeamHTML') ;

  var homeTeamAverageGoalsForHTML =  document.getElementById('homeTeamAverageGoalsForHTML') ;

  var homeTeamAverageGoalsAgainstHTML =  document.getElementById('homeTeamAverageGoalsAgainstHTML') ;

  

  var awayTeamAverageGoalsForHTML =  document.getElementById( 'awayTeamAverageGoalsFor') ;

  var awayTeamAverageGoalsAgainstHTML =  document.getElementById('awayTeamAverageGoalsAgainst') ;



  var adjustedHomeTeamGoalsForHTML = document.getElementById('adjustedHomeTeamGoalsFor');

  var adjustedAwayTeamGoalsForHTML = document.getElementById('adjustedAwayTeamGoalsFor');




  //KNOWING WE HAVE A GAME ID COMING ON THIS PAGE, WE EXTRACT BOTH TEAMS





  homeTeamHTML.innerHTML +=  "<?php echo $homeTeamName ?>";

  awayTeamHTML.innerHTML += "<?php echo $awayTeamName ?>";






  homeTeamAverageGoalsForHTML.innerHTML +=  <?php echo $homeTeamAvgGoalsFor ?>;

  homeTeamAverageGoalsAgainstHTML.innerHTML +=  <?php echo $homeTeamAvgGoalsAgainst ?>;




   



   awayTeamAverageGoalsForHTML.innerHTML += <?php echo $awayTeamAvgGoalsFor ?>;

   awayTeamAverageGoalsAgainstHTML.innerHTML += <?php echo $awayTeamAvgGoalsAgainst ?>;





   // HAVING THE NECESSARY STATS, WE CAN THEN CALCULATE THE ADJUSTED GOALS 



      var adjustedHomeTeamGoals = <?php echo $adjustedHomeTeamGoals ?>;

      var adjustedAwayTeamGoals = <?php echo $adjustedAwayTeamGoals ?>;



      var homeTeamStandardDeviation = <?php echo $homeTeamStandardDeviation  ?>;

      var awayTeamStandardDeviation = <?php echo $awayTeamStandardDeviation ?>;
        
      

     adjustedHomeTeamGoalsForHTML.innerHTML += " " + adjustedHomeTeamGoals;

     adjustedAwayTeamGoalsForHTML.innerHTML += " " +  adjustedAwayTeamGoals;
      


      for(i=0; i < 10000 ; i++){

        console.log( 'here is a game simulation Angers/Lyon. ' + '<br>');

        console.log( "<?php echo $homeTeamName ?>"  +  ' : ' + jStat.normal.inv( Math.random() , adjustedHomeTeamGoals , homeTeamStandardDeviation  ));

        console.log( '<br>');

        console.log( "<?php echo $awayTeamName ?>"  +  ' : ' + jStat.normal.inv( Math.random() , adjustedAwayTeamGoals , awayTeamStandardDeviation  ));


        

      }

        





   </script>