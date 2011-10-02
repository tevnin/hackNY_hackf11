<?php

var outputString = new Array;


$occupy = new TumblrPost();

$pullTumblr = $occupy->parse();

var_dump($pullTumblr);


/*	
	
	function percent (percentData) {
			 
		var postNumber = 5;
		
		var body = percentData.response.posts[postNumber].body;

		
		//stripping HTML from: http://robertnyman.com/roblab/javascript-remove-tags.htm	 
		
		body = body.replace(/&(lt|gt);/g, function (strMatch, p1){
			return (p1 == "lt")? "<" : ">";
		});
		var bodyStrip = body.replace(/<\/?[^>]+(>|$)/g, "");
	
	
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		bodyStrip = bodyStrip.replace(/&#?[a-z0-9]{2,8};/i,"");
		
		
		//console.log(bodyStrip); 


		//adding %20 in spaces for HTML query
		bodyStrip=bodyStrip.replace(/ /g,"%20");
		
		//console.log(bodyStrip);
		
		
		var shortUrl = "http://140it.com/api/shrink?text="+bodyStrip;


		$.getJSON(shortUrl+"&callback=?", function(shortData) {   //jsonp request
		
		
			var outputString = splitter(shortData['new'], 148);
			
			
			console.log(outputString.length);
			
			//document.write(outputString[1]);

			
			
			if (outputString.length == 1){	
				document.write(outputString[0]);
			}
			
			
			if (outputString.length == 2){	
				document.write(outputString[0]+"(txt4more..)");
				document.write(outputString[1]);
			}
			
			if (outputString.length == 3){	
				document.write(outputString[0]+"(txt4more..)");
				document.write(outputString[1]+"(txt4more..)");
				document.write(outputString[2]);
			}
			
			if (outputString.length == 4){	
				document.write(outputString[0]+"(txt4more..)");
				document.write(outputString[1]+"(txt4more..)");
				document.write(outputString[2]+"(txt4more..)");
				document.write(outputString[3]);
			}
			
			
			if (outputString.length == 5){	
				document.write(outputString[0]+"(txt4more..)");
				document.write(outputString[1]+"(txt4more..)");
				document.write(outputString[2]+"(txt4more..)");
				document.write(outputString[3]+"(txt4more..)");
				document.write(outputString[4]);
			}
			
			if (outputString.length == 6){	
				document.write(outputString[0]+"(txt4more..)");
				document.write(outputString[1]+"(txt4more..)");
				document.write(outputString[2]+"(txt4more..)");
				document.write(outputString[3]+"(txt4more..)");
				document.write(outputString[4]+"(txt4more..)");
				document.write(outputString[5]);
			}
			

		    	    
		});	 
	}
			 
			 
	function splitter(str, l){
	    var strs = [];
	    while(str.length > l){
	        var pos = str.substring(0, l).lastIndexOf(' ');
	        pos = pos <= 0 ? l : pos;
	        strs.push(str.substring(0, pos));
	        var i = str.indexOf(' ', pos);
	        if(i < pos || i > pos+l)
	            i = pos;
	        str = str.substring(pos);
	    }
	    strs.push(str);
	    return strs;
	    
	}
	
*/
			 
	class TumblrPost {
	  function parse() {
	
	        $percentURL =  "http://api.tumblr.com/v2/blog/wearethe99percent.tumblr.com/posts/text?api_key=eTWiIM8BvyUNOkl7QZUUSei2WgcaMXwOBASDVeUSymGsBBuLfy";
	  		$shortData;
	  		$percentData;
		  		
	  		//$.ajax({url:percentURL+"&jsonp=percent", dataType:"jsonp"});
	  		
	  		$data = file_get_contents(percentURL);
	  		
	  		$tumblr = json_decode($data);
	  		
	  		return $tumblr;
	
	  }  
	  
	  
	}

?>