<?php
  
  
  require 'apiController.php';



function seeOneChampionship($championshipId){


  /*
     
    //I WANT TO AVOID API CALLS. SO I'LL MINIMIZE ANY CALL I CAN.
    
    $championshipName = getChampionshipName($championshipId);

    $currentWeek = json_decode(json_decode(getCurrentWeek($championshipId)))->{"api"}->{"fixtures"}[0];
    
    $weeklyGames = getWeeklyGames($championshipId, $currentWeek); 


    */

    require(' ../../views/templates/allGames.php');

}



function seeOneGame($gameId){



  /*
  
   $game = json_decode(getGame($gameId), true);
  
   echo $game;



  

  //USING THE GAME ID, GET THE HOME TEAM, AND THE AWAY TEAM

  
    
  $game = json_decode(json_decode(getGame($gameId), true));

 
 
      //League ID


      $leagueId = $game->{"api"}->{"fixtures"}[0]->{"league_id"};



      //TEAMS ID


      


      

      //TEAMS OBJECTS
                    
         
      $homeTeam = $game->{"api"}->{"fixtures"}[0]->{"homeTeam"};
      $awayTeam = $game->{"api"}->{"fixtures"}[0]->{"awayTeam"};




      $playingTeams = [$homeTeam, $awayTeam];



      



      //TEAMS IDs


      $homeTeamId;
      $awayTeamId;





   //NAMES



       $homeTeamName;
       $awayTeamName;




    //GOALS



    
      $homeTeamAvgGoalsFor;
      $homeTeamAvgGoalsAgainst;


      $awayTeamAvgGoalsFor;
      $awayTeamAvgGoalsAgainst;




      //VARIABLES USED IN THE LOOP
  
       $goalsScored;

       $sumOfDeviations;

       $deviation;


       $homeTeamStandardDeviation;

       $awayTeamStandardDeviation;









       //CREATE ALL THE VARIABLES WE WILL NEED IN THE VIEW , FOR EACH TEAM

  
     forEach($playingTeams as $team){

 
        $sumOfDeviations = 0;



        $teamId = $team->{"team_id"};

  
        $teamName = $team->{"team_name"};

        $teamStats =  json_decode(json_decode(getTeamStats( $leagueId , $teamId)))->{"api"}->{"statistics"};



        $teamAvgGoalsFor = $teamStats->{"goalsAvg"}->{"goalsFor"}->{"total"};

        $teamAvgGoalsAgainst = $teamStats->{"goalsAvg"}->{"goalsAgainst"}->{"total"};



        $teamGamesArray = json_decode(json_decode(getTeamFixtures($leagueId , $teamId)))->{"api"}->{"fixtures"}; 






          //CREATE THE TEAMS VARIABLES


          
          if($team == $homeTeam){
            
               $homeTeamId = $teamId;

               $homeTeamName = $teamName;


               $homeTeamStats = $teamStats;

               $homeTeamAvgGoalsFor = $teamAvgGoalsFor;

               $homeTeamAvgGoalsAgainst = $teamAvgGoalsAgainst;


          } else {

              $awayTeamId = $teamId;

              $awayTeamName = $teamName;

              $awayTeamStats = $teamStats;

              $awayTeamAvgGoalsFor = $teamAvgGoalsFor;

              $awayTeamAvgGoalsAgainst = $teamAvgGoalsAgainst;

          }



          //STANDARD DEVIATION


                   
                   //LOOP ON ALL THE TEAMS GAME, EXTRACT EACH GOALS FOR , TO CALCULATE THE STANDARD DEVIATION OF GOALS FOR


         foreach($teamGamesArray as $playedGame){

               //CHECK FOR EACH GAME , IF THE PLAYER WE CHECK PLAYS AT HOME OR AWAY
               
 
            if($playedGame->{"homeTeam"}->{"team_name"} == $teamName){   


              //CREATION OF VARIABLES


              //LOCAL VARIABLE USED AT EACH GAME OF THE TEAM WE'RE LOOPING ON
                        
              $goalsScored = $playedGame->{"goalsHomeTeam"};
              


            } else {



             //CREATION OF VARIABLES


  
              $goalsScored = $playedGame->{"goalsAwayTeam"};


        } 

 

        $deviation = $goalsScored - $teamAvgGoalsFor;

        $sumOfDeviations += pow( $deviation , 2);


        //END OF GAMES ARRAY LOOP

   
     }


        $standardDeviation =  sqrt(($sumOfDeviations/count($teamGamesArray)));


      if($team == $homeTeam){

          $homeTeamStandardDeviation = $standardDeviation;


        } else {

          $awayTeamStandardDeviation = $standardDeviation;

        }



        echo 'for the team ' . $teamName . ' the standard deviation is : ' .  $standardDeviation ;

        echo ' <br> The average goals for is : ' . $teamAvgGoalsFor;

        echo ' <br> The average goals against is : ' . $teamAvgGoalsAgainst;




   }




   $adjustedHomeTeamGoals = number_format(sqrt( $homeTeamAvgGoalsFor * $awayTeamAvgGoalsAgainst) , 2 , '.' , ',');

   $adjustedAwayTeamGoals = number_format(sqrt($awayTeamAvgGoalsFor * $homeTeamAvgGoalsAgainst) , 2 , '.' , ',' ); 



  
     */


      require(' ../../views/templates/oneGame.php');

      
  
 }
     

 






