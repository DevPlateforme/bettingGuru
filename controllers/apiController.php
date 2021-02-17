<?php


  function getData($request){

	
	$curl = curl_init();
	
	
	//2020 ligue 1 id : 2664
	
	
	//CURRENT WEE
	
	
	curl_setopt_array($curl, [
		CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v2/" . $request,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => [
			"x-rapidapi-host: api-football-v1.p.rapidapi.com",
	    	"x-rapidapi-key: 86be37b210mshdb1682c7f064a83p1b8cdejsn9cb56"
		],
	]);
	
	
	
	$response = curl_exec($curl);
	
	curl_close($curl);
	

	$jsResponse = json_encode($response);


	if($response === false){

		return "il y'a eu une erreur";

	} else{

		return $jsResponse;

	}
	
  }
  




  function getChampionshipName($championshipId){


	  $leagueData = getData("leagues/league/" . $championshipId);

	  
	  //equivalent of : $leagueData->api->leagues[0]->name (but , particular notation for handling this data)


	  $name = json_decode(json_decode($leagueData));
	  
	  return $name->{"api"}->{"leagues"}[0]->{"name"};


  }

  function getCurrentWeek($championshipId){
	  

	return getData("fixtures/rounds/" . $championshipId . "/current");

  }



  function getWeeklyGames($championshipId, $currentWeek){
	
	return getData("fixtures/league/" . $championshipId . "/" . $currentWeek);

  }
 

	
  function getGame($gameId){

	return getData(	"fixtures/id/". $gameId ."?timezone=Europe%2FLondon");

  }


  function getTeam($teamId){

	return getData("teams/team/" . $teamId);

  }


  
  function getTeamStats($leagueId, $teamId){

	return getData("statistics/" . $leagueId . '/' . $teamId);

  }


  function getTeamFixtures($leagueId, $teamId){
	
	return getData("fixtures/team/" . $teamId . "/" . $leagueId . "?timezone=Europe%2FLondon");

  }


