
<style>
   html, body {
  width: 100%;
  height:100%;
}

body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 11s ease infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
      } 
   }

     #mainDiv{  

        position: absolute;

        top: 10vh;

        left: 5vw;

        height : 80vh;

        width : 90vw;

        display: flex;

        flex-direction: row;

        justify-content: space-around;

        align-items: center;


     }



     #leftDiv{

        height: 80%;

        width: 25%;

        display: flex;

        flex-direction: column;

        justify-content : space-between;



     }


     #leftDiv div{

        height: 40%;

        width: 100%;

        border-radius: 11px;

     }

     #stats{

        background: red;
  
     }


     #games{

        background: blue;
     }



      #rightDiv{

        height: 80%;

        width: 50%;

        display: flex;

        flex-direction: column;

        justify-content: space-between;

        border-radius: 11px;


     }


     #rightDivTop{

        width: 100%;

        height:60%;

        background: purple;

        display: flex;

        flex-direction: row; 

        justify-content: space-around; 

        align-items: center;
     }

     #rightDivTop div{

        background: blue;

        width: 30%;

        height : 70%;


     }




     #rightDivBottom{

        width: 100%;

        height:40%;

        background: green;

        display: flex;

        flex-direction: column;
     }


     #rightDivBottom1 {

        width: 100%;

        height:70%;

        background: brown;

     }





     #rightDivBottom2{

        height: 30%;

        width: 100%;

        background: blue;

        display: flex;

        justify-content: space-between;


     }






</style>


<div id='mainDiv'>

  <div id='leftDiv'>

       <div id='stats'> Stats



       <canvas id="myChart"></canvas>

       
        </div>
    
       <a href=""></a><div id='games'> <button>Voir</button> </div>  


  </div>

      <div id='rightDiv'>

          <div id='rightDivTop'>

              <div id='homeTeamLogo'>

              </div>

              <div id='awayTeamLogo'>
              
              </div>
          
          
          
          </div> 


          <div id='rightDivBottom'>

                  

                  <div id='rightDivBottom1'>
                        <div>Type de confrontation : désequilibré</div>

                       <div>Dynamiques actuelles</div>  
       
                       <div>classement</div>
                 </div>

                  <div id='rightDivBottom2'>

                        <div>3.5</div>
                        <div>1.8</div>
                        <div>1.9</div>

                  
                  
                  </div>
               

          </div> 
   
      
      </div>

</div>




<div id='odds'></div>











<script src='https://cdnjs.cloudflare.com/ajax/libs/jstat/1.9.4/jstat.min.js'></script>




<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>



<script>


var ctx = document.getElementById('myChart').getContext('2d');


 

var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ['home team', 'away team'],
        datasets: [{
            label: 'Total goals scored',
            data: [15,25],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
         animation: {

            duration: 2000
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


















</script>






































<script>



/*



HTML





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

















   //DOM VARS

  var homeTeamHTML = document.getElementById('homeTeamHTML') ;

  var homeTeamAverageGoalsForHTML =  document.getElementById('homeTeamAverageGoalsForHTML') ;

  var homeTeamAverageGoalsAgainstHTML =  document.getElementById('homeTeamAverageGoalsAgainstHTML') ;

  

  var awayTeamAverageGoalsForHTML =  document.getElementById( 'awayTeamAverageGoalsFor') ;

  var awayTeamAverageGoalsAgainstHTML =  document.getElementById('awayTeamAverageGoalsAgainst') ;



  var adjustedHomeTeamGoalsForHTML = document.getElementById('adjustedHomeTeamGoalsFor');

  var adjustedAwayTeamGoalsForHTML = document.getElementById('adjustedAwayTeamGoalsFor');




  //KNOWING WE HAVE A GAME ID COMING ON THIS PAGE, WE EXTRACT BOTH TEAMS





  homeTeamHTML.innerHTML +=  "<?php ////echo $homeTeamName ?>";

  awayTeamHTML.innerHTML += "<?php ////echo $awayTeamName ?>";






  homeTeamAverageGoalsForHTML.innerHTML +=  <?php //echo $homeTeamAvgGoalsFor ?>;

  homeTeamAverageGoalsAgainstHTML.innerHTML +=  <?php //echo $homeTeamAvgGoalsAgainst ?>;




   



   awayTeamAverageGoalsForHTML.innerHTML += <?php //echo $awayTeamAvgGoalsFor ?>;

   awayTeamAverageGoalsAgainstHTML.innerHTML += <?php //echo $awayTeamAvgGoalsAgainst ?>;





   // HAVING THE NECESSARY STATS, WE CAN THEN CALCULATE THE ADJUSTED GOALS 



      var adjustedHomeTeamGoals = <?php //echo $adjustedHomeTeamGoals ?>;

      var adjustedAwayTeamGoals = <?php //echo $adjustedAwayTeamGoals ?>;



      var homeTeamStandardDeviation = <?php //echo $homeTeamStandardDeviation  ?>;

      var awayTeamStandardDeviation = <?php //echo $awayTeamStandardDeviation ?>;
        
      

     adjustedHomeTeamGoalsForHTML.innerHTML += " " + adjustedHomeTeamGoals;

     adjustedAwayTeamGoalsForHTML.innerHTML += " " +  adjustedAwayTeamGoals;
      


      for(i=0; i < 10000 ; i++){

        console.log( 'here is a game simulation Angers/Lyon. ' + '<br>');

        console.log( "<?php ////echo $homeTeamName ?>"  +  ' : ' + jStat.normal.inv( Math.random() , adjustedHomeTeamGoals , homeTeamStandardDeviation  ));

        console.log( '<br>');

        console.log( " <?php ////echo $awayTeamName ?>"  +  ' : ' + jStat.normal.inv( Math.random() , adjustedAwayTeamGoals , awayTeamStandardDeviation  ));


        

      }

        




  */


   </script>