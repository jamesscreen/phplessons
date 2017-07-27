<!DOCTYPE html>
<html lang=”ru”>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Git test project">
	<meta name="autor" content="JamesScreen">
	<title>Шапка HTML-страницы</title>
</head>
<body>
	<header><h1>PHP training</h1></header>
	<article>
		<?php
			error_reporting(-1);
			$dollar = 200;
			$exchange = 32.24;
			$roubles = $dollar * $exchange;
			echo "$dollar долларов можно обменять на $roubles рублей";
		?>
	</article>
	<footer><br>&#169; JamesScreen, 2017.</footer>
</body>
</html>