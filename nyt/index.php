<!-- NYT ftw -->
<!doctype html>
<html>
	<head>
		<title>NYT</title>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		
		<script>
			var apiKey = "52697f63c9ade478ec6f2c7d71811aa6:17:61363877";
			var url = "http://api.nytimes.com/svc/search/v1/article?format=json&query=occupy%2Bwall%2Bstreet&rank=newest&api-key=" + apiKey;
			console.log(url);
			
			$.getJSON(url, function(data){
				console.log(data);
				
				
			});
		</script>
		
	</head>
	
	<body>
	</body>
</html>