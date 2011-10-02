<?php

	$times = new NYTimes();
	$testForLatestNYT = $times->findNYTimes('occupy+wall+street');
	
	$testForLatestNYT = $times->findNYTimes($sys_argument);
	
	$searchQuery = preg_replace(' ', '+', $_REQUEST('sys_argument'));

	echo('<message><content>'.$testForLatestNYT->results[0]->title ." - ". $testForLatestNYT->results[0]->body.'</content></message>');

	class NYTimes {
	
	    public function findNYTimes($query) {
	        $data = file_get_contents('http://api.nytimes.com/svc/search/v1/article?format=json&query='.urlencode($searchQuery).'&rank=newest&api-key=52697f63c9ade478ec6f2c7d71811aa6:17:61363877');
	        $nyts = json_decode($data);

	        return $nyts;
	    }
	

	}
	
	
?>