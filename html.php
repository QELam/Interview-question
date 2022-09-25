<html>
	<head>
		<title>Interview Question</title>
		<style>
			.container
			{
				border: 2px solid black;
				padding: 10px;
				padding-bottom: 16px;
				width: 400px;
				margin: auto;
			}

			b
			{
				font-size: 19px;
			}

			p
			{
				color: mediumseagreen;
				font-size: 18px;
			}

			input[type=text]
			{
				padding: 12px 20px;
				box-sizing: border-box;
			}

			input[type=text]:focus
			{
				border: 3px solid black;
			}

			input[type=submit]
			{
				background-color: #74B72E;
				color: white;
				border: none;
				padding: 10px;
				text-align: left;
				cursor: pointer;
				width: 130px;
				font-size: 18px;
				margin-bottom: 10px;
			}

			.button_right
			{
				text-align: right;
			}
		</style>
	</head>
	<body>
		<!--In this part of div element is for collect input form user and the submit button-->
		<div class="container">
			<form method="post">
			<b>User Name:</b> <input type="text" name="userName" id="name"/><br />
			</form>
			<!--When submit button is click by user input will pass through the verify_ajax.js to check-->
			<div class="button_right"><input type="submit" onclick="check()"></div>
			<p><span id="result">Key in username and click submit</span></p>
		</div>
		<script src="verify_ajax.js"></script>
		<script>
            /*Input of verified or error will receive by using URL from the info.php and decide the color of the word*/
            var validString = decodeURIComponent(window.location.search);
            result = validString.substring(1);
            /*When input has been verified*/
			if (result === "Verified") {
				document.getElementById("result").style.color = "mediumseagreen";
				document.getElementById("result").innerHTML = result;
            }
            /*When input has been error*/
			else if (result === "Error") {
				document.getElementById("result").style.color = "red";
				document.getElementById("result").innerHTML = result;
			}
        </script>
	</body>
</html>