<?php
session_start();

?>

<!doctype html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<meta name="author" content="58th WEB CHIEF">
		<meta name="format-detection" content="telephone=no,address=no,email=no">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
		<link rel="stylesheet" href="./css/login_style.css">
	</head>
	<body>
		<div class="wrap">
			<div class="title">
				<h1>Data Base LOGIN</h1>
			</div>
			<div class="contents">
			<p>Enter your ID & PassWord</p>
				<form action="#">
					<dl>
						<dt>USER NAME:</dt><dd><input type="text" name="id"></dd>
						<dt>PASS WORD:</dt><dd><input type="text" name="pass"></dd>
						<button type="submit">LOGIN</button>
					</dl>
				</form>
				<div class="message"> <!-- Error Message -->
					<p>Entered ID & Pass is wrong!<br>
					Check and try it again.</p>
				</div>
			</div>
		</div>
		<script>

		</script>
	</body>
</html>