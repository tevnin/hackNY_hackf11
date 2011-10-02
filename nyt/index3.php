<!-- NYT ftw -->

<!doctype html>
<html>
	<head>
		<title>NYT</title>
		<style type="text/css">
 	body: { font-family: Helvetica;}
</style>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		
		<script>
		
			var titles = new Array();
			var body = new Array();
			
			var apiKey = "52697f63c9ade478ec6f2c7d71811aa6:17:61363877";
			for(var offset =0; offset<80; offset+=10)
			{
				var url = "http://api.nytimes.com/svc/search/v1/article?format=json&query=occupy%2Bwall%2Bstreet&rank=newest"+"&offset="+ offset + "&api-key="  + apiKey;
				
				console.log(url);
				
				$.ajax({	
					url:"http://pipes.yahoo.com/pipes/pipe.run", 
					data:{
						u: url,
						_id: "332d9216d8910ba39e6c2577fd321a6a",
						_render: "json"
						},
					jsonp: "_callback",
					dataType: "jsonp",
					
				
					success: function(data){
					
						//console.log(data);
						console.log(data.value.items[0].results);
						var items = data.value.items[0];
						for( var i = 0; i<items.results.length; i++)
						
						{
							titles.push(items.results[i].title);
							body.push(items.results[i].body);
							document.write("<h4>"+items.results[i].title+"</h4>");
							document.write("<p>"+items.results[i].body+"</p>");
						}
						
					}	
				});
			}

			
		</script>
		
		
	</head>
	
	<body>
	</body>
</html>