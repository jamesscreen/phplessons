<!DOCTYPE html>
<html lang=”ru”>
<head>
	<meta charset="utf-8">
	<title>PHP training. Задача 3. Математические операции</title>
	<meta name="description" content="Git test project">
	<meta name="author" content="JamesScreen">
</head>
<body>
	<header><h1>PHP training. Задача 3. Математические операции</h1></header>
	<nav>Панель навигации пока отсутствует!</nav>
	<aside>Боковая панель пока отсутствует!</aside>
	<article>
		<h2>Арифметические операции</h2>
		<table>
			<tr>
				<td>Название:</td>
				<td>Описание:</td>
				<td>Код:</td>
				<td>Результат выполнения:</td>
			</tr>
			<tr>
				<td>Отрицание</td>
			</tr>
			<tr>
				<td>Сложение</td>
			</tr>
			<tr>
				<td>Вычитание</td>
			</tr>
			<tr>
				<td>Умножение</td>
			</tr>
			<tr>
				<td>Деление</td>
			</tr>
			<tr>
				<td>Деление по модулю</td>
			</tr>
		</table>
		<p>
			
		</p>
		<p>Отрицание. Смена знака a = 3. b = -a<br>
		<!--  -->
		<!-- Вариант 1 -->
			<?php
				$a = 3;
				$b = -$a;
				echo "b= $b";
			?><br>
		</p>
		<p>Сложение. Сумма a + b<br>
			a = 3;<br>
			b = 7;<br>
			c = 2.5;<br>
			d = -0.9;<br><br>
			<?php 
				$a = 3;
				$b = 7;
				$c = 2.5;
				$d = -0.9;
				echo "a+b= $a+$b<br>";
				echo "b+c= $b+$c<br>";
				echo "c+d= $c+$d<br>";
				echo "a+d= $a+$d<br>";
			?> 
		</p>
		
	</article>
	<footer>&#169; JamesScreen, 2017</footer>
</body>
</html>