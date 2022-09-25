<html>
	<head></head>

	<body>
		<p id="display">Testing</p>
		<script>
			/*Separate value out from the URL and remove the unknown*/
			var queryString = decodeURIComponent(window.location.search);
			queryString = queryString.substring(1);
			
			/*If value="abc" will display verified*/
			if(queryString === "abc"){window.location.href = "html.php" + "?Verified";}
			/*If value!="abc" will display error*/
			else{window.location.href = "html.php" + "?Error";}
		</script>
		<script src="verify_ajax.js"></script>
	</body>
</html>