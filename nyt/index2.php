<?php

	$times = new NYTimes();
	$testForLatestNYT = $times->findNYTimes('occupy+wall+street');
	// $text = $testForLatestNYT[0]->text;
	// 	$text = strip_tags(trim($text));
	// 	echo($text);

	var_dump($testForLatestNYT);
	//$title = $testForLatestNYT->results->;
	
	data.value.items[0];

	class NYTimes {
	
	    public function findNYTimes($query) {
	        $data = file_get_contents('http://api.nytimes.com/svc/search/v1/article?format=json&query='.urlencode($query).'&rank=newest&api-key=52697f63c9ade478ec6f2c7d71811aa6:17:61363877');
	        $nyts = json_decode($data);

	        return $nyts;
	    }

	}
	
	// $sys_argument = $_REQUEST['sys_argument'];
	// 	 echo "<message><content>'$sys_argument'!</content></message>";
	
	
?>