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
			"x-rapidapi-key: a64d65cffcmshb9b72d000354454p121090jsnde30cf70170c"
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



  function getCurrentWeek($championshipId){
	  

	return getData("fixtures/rounds/" . $championshipId . "/current");

  }



  function getWeeklyGames($currentWeek){
	
	return getData("fixtures/league/2664/" . $currentWeek);

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


