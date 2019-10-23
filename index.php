<?php  // Работа с переменными
	$a=3;
	echo $a, ' ';
	$a=10;
	$b=2;
	echo $a + $b, ' ';
	echo $a - $b, ' ';
	echo $a * $b, ' ';
	echo $a / $b, ' ';
		$a = 10; $b = 2; $c = 5;
		echo $a+$b+$c, ' ';
		$a=17;
		$b=10;
		echo $c=$a-$b, '  ';
		$d=7;
		$result=$d+$c;
		echo $result;
   			// Работа со строками
		$text = ' Привет, мир ';
		echo $text; 

			$text1 = ' Привет, ';
			$text2 = ' Мир ';
			$text3 = $text1.$text2;
			echo $text3;
		$name = ' Александр ';
		echo $text4= $text1.$name;
		$age= 20;
		$text5 = ' Мне ';
		$text6 = ' лет  ';
		echo $text7 = $text5.$age.$text6;
		//Обрашение к символам строки
			$text = 'abcde';
			$text[0] = '!';
			echo $a=$text[0], '  ';
			echo $b=$text[2], '  ';
			echo $c=$text[4], '  ';
		 	// Практика
				$h=60 * 60; //секунд в часе ;
				$m=60; // секунд в минуте;
				$day = $h * $m * 24;  // секунд в сутках
				echo $day, ' секунд в сутках ';
				echo $h, ' секунд в часе '; 
				echo $m, ' секунд в минуте ';

				$hour =  '16:' ;
				$minute =  '49:';
				$second =  '50';
				echo $time=$hour.$minute.$second;
				// Работа с присваиванием и декрементами
				$var  = 47;
				$var +=	 7;
				$var -= 18;
				$var *= 10;
				$var /= 20;
				echo '  ';
				echo  $var; 
					$text = 'Я';
					$text .= ' хочу';
					$text .= ' знать';
					$text .= ' PHP!';
					echo '  ';
					echo $text;	
							$var = 10;
						$var++;
						$var++;
						$var--;
						echo '  ';
						echo $var;
								$var = 10;
								$var += 7;
								$var++;
								$var--;
								$var +=12;
								$var *= 7;
								$var -= 15;
								echo '  ';
								echo $var;

			?>
