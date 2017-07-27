<!DOCTYPE html>
<html lang=”ru”>
<head>
 	<meta charset="utf-8">
 	<meta name="description" content="PHP training">
 	<meta name="author" content="JamesScreen">
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

		<h3>PHP-код задачи:</h3>
		<p>
			&lt;?php<br>
			$n = 3;<br>
			for($i = 1; $i &lt;= $n; $i++){<br>
				$kvr = pow($i, $i);<br>
				$sum += $kvr;<br>
				echo  "$i &lt;sup&gt;$i&lt;/sup&gt; = ".$kvr."&lt;br/&gt;";<br>
			}<br>
			echo "Сумма всех чисел = ".$sum;<br>
			?&gt;<br>
		</p>

		<h3>Выполнение кода:</h3>
		<p>
			<?php
				$n = 3;
				for($i = 1; $i <= $n; $i++){
					$kvr = pow($i, $i);
					$sum += $kvr;
					echo "$i <sup>$i</sup> = " . $kvr . "<br/>";
				}
				echo "Сумма всех чисел = ".$sum;
				$sum=0;
			?>
		</p>
		
		<h3>Подключаем внешний php-код командой include</h3>
		<p>
			<?php
				include($_SERVER['DOCUMENT_ROOT'].'/code/001sum/sum.php');
				//include('/code/001sum/sum.php'):
			?>
		</p>
 	</article>
 	
 	<!-- 
 		Футер Сайта. Здесь располагается Имя Автора, 
 		Дата документа, контактная и правовая информация.
 	-->
 	<footer>&#169; JamesScreen, 2017</footer>
</body>
</html> 