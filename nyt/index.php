<?php

	if($_REQUEST['sys_argument']) {        
    	$sys_argument = $_REQUEST['sys_argument'];
    } else {
        $sys_argument = "occupy wall street";
    }

	$times = new NYTimes();
	
	//$searchQuery = preg_replace(' ', '+', $sys_argument);
	$testForLatestNYT = $times->findNYTimes($sys_argument);




	class NYTimes {
	
	    public function findNYTimes($query) {
	        $data = file_get_contents('http://api.nytimes.com/svc/search/v1/article?format=json&query='.urlencode($query).'&rank=newest&api-key=52697f63c9ade478ec6f2c7d71811aa6:17:61363877');
	        $nyts = json_decode($data);

	        return $nyts;
	    }
	

	}
	
		echo('<message><content>From the NYTimes - ' . $testForLatestNYT->results[0]->title . " - " . $testForLatestNYT->results[0]->body . '</content></message>');		
	
	
?>