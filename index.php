<!DOCTYPE html>
<html lang=”ru”>
<head>
	<meta charset="utf-8">
	<meta name="description" content="PHP training">
	<meta name="autor" content="JamesScreen">
</head>
<body>
	<header> <!-- Шапка Сайта -->
		<h1>PHP training</h1>
	</header>
	<nav>
		Панель навигации пока отсутствует!
	</nav>
	<aside>
		Боковая панель пока отсутствует!
	</aside>
	<article>
		<h2>Урок первый. Квадраты и суммы чисел</h2>
		<p>Дано натуральное число n. Вычислить: 1<sup>1</sup> + 2<sup>2</sup> + 3<sup>3</sup>.. + n<sup>n</sup>. Вывести на экран квадраты этих чисел и сумму квадратов этих чисел в понятной форме.</p>
		


		<p>
			<?php
			$n = 3;
			for($i = 1; $i <= $n; $i++){
				$kvr = pow($i, $i);
				$sum += $kvr;
				echo  "$i <sup>$i</sup> = ".$kvr."<br/>";
			}

			echo "Сумма всех чисел = ".$sum;
			?>
		</p>
	</article>
	
	<!-- 
		Футер Сайта. Здесь располагается Имя Автора, 
		Дата документа, контактная и правовая информация.
	-->
	<footer>
		&#169; JamesScreen, 2017.
	</footer>
</body>
</html>