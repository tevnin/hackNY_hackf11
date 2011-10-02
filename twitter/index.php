<?php

	$twitter = new Twitter();
	$testForLatestTweet = $twitter->findTweets('#occupywallstreet');
	$text = $testForLatestTweet[0]->text;
	$text = strip_tags(trim($text));
	// for($i=0; i<textExploded.length; i++){
	// 	text .= textExploded[i];
	// }
	echo($text);
//	echo("<script>console.log('" . var_dump($testForLatestTweet) . "')</script>");


	class Twitter {
	
	    public function findTweets($query, $formatLinks = TRUE) {
	        $data = file_get_contents('http://search.twitter.com/search.json?rpp=30&result_type=popular&q=' . urlencode($query));
	        $tweets = json_decode($data);

	        if ($formatLinks === TRUE) {
	            $tweets = $this->_formatLinks($tweets->results);
	        } else {
	            $tweets = $tweets->results;
	        }
	        return $tweets;
	    }
	
	
	
		protected function _formatLinks($tweets) {
	        for ($i = 0; $i < count($tweets); $i++)
	        {
	            // Format normal links
	            $tweets[$i]->text = preg_replace('/((http|ftp|https|ftps|irc):\/\/[^()<>\s]+)/i', '<a href="$1" target="_blank">$1</a>', $tweets[$i]->text);

	            // Format links to user profiles (for @ messages)
	            $tweets[$i]->text = preg_replace('/@([a-zA-Z-+_]+)/i', '<a href="http://www.twitter.com/$1" target="_blank">@$1</a>', $tweets[$i]->text);

	            // Format hashtag links
	            $tweets[$i]->text = preg_replace('/#([a-zA-Z-+_]+)/i', '<a href="http://twitter.com/search?q=%23$1" target="_blank">#$1</a>', $tweets[$i]->text);
	        }

	        return $tweets;
	    }
	}
	
?>