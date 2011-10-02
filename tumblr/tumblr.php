<?php

if(isset($_REQUEST['sys_argument'])) {        
               $sys_argument = $_REQUEST['sys_argument'];
       } else {
               $sys_argument = "99percent";
       }
       
       
	
	if ($sys_argument == "99percent"){
		$tumblrName == "wearethe99percent"
		
		}
		
	]if ($sys_argument == "wearethe99percent"){
		$tumblrName == "wearethe99percent"
		
		}
		
	if ($sys_argument == "occupy us" || $sys_argument == "occupyus"){
		$tumblrName == "occupyus"
		
		}
		
	if ($sys_argument == "anonymous"){
		$tumblrName == "99anon"
		
		}

$outputString = array();

$occupy = new TumblrPost();

$pullTumblr = $occupy->parse();


	echo('<message><content>'.$pullTumblr->response->blog->description.'</content></message>');
	//echo('<message><content>'.$pullTumblr->results[0]->title ." - ". $pullTumblr->results[0]->body.'</content></message>');


	for ($i=0;$i<10;$i++) {
			 
		$postNumber = $i;
		
		$body = $pullTumblr->response->posts[$postNumber]->body;

		/*
		$body = $body preg_replace(/&(lt|gt);/g, function (strMatch, p1){
			return (p1 == "lt")? "<" : ">";
		});
		var bodyStrip = body.replace(/<\/?[^>]+(>|$)/g, "");
		
		*/
		
		$bodyStrip = strip_tags($body);
		
		//echo($bodyStrip);
		
		$bodyStrip = preg_replace("/&.{0,}?;/",'',$bodyStrip);
		
		$bodyStrip = urlencode($bodyStrip);
		
	    $shortUrl = "http://140it.com/api/shrink?text=".$bodyStrip;


		//echo $shortUrl;
		$output = $occupy->shorten($shortUrl);
		
		//echo($output->new);
		
		//$rest = substr("abcdef", 0, -1);
		
		$text[$i] = substr($output->new, 0, 465);
	
		
	}
	
	
	

	
	
		
	//var_dump($text);
			 
	class TumblrPost {
	  function parse() {
	
	    $percentURL =  "http://api.tumblr.com/v2/blog/".$tumblrName.".tumblr.com/posts/text?api_key=eTWiIM8BvyUNOkl7QZUUSei2WgcaMXwOBASDVeUSymGsBBuLfy";

		
	  	// create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $percentURL); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);      
        
        $tumblr = json_decode($output);
        
        return $tumblr;
	
	  }  
	  
	function shorten($shortUrl) {
		
	  	// create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $shortUrl); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $outputTumblr = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);    
        
        $outputTumblr = json_decode($outputTumblr);  
                
        return $outputTumblr;
       
        
    }


	  
	}
	

?>