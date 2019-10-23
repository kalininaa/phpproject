<?php 

$arr = ['a','b','c'];
var_dump($arr);  
echo $arr[0],' ';
echo $arr[1],' ';
echo $arr[2],' ||||||||| ';
	$arr = ['a', 'b', 'c', 'd'];
	echo $arr[0].'+'.$arr[1].','.$arr[2].'+'.$arr[3],' ';
		$arr = [2,5,3,9];
		$a= $arr[0]*$arr[1];
		$b = $arr[2]* $arr[3];
		echo $result= $a+$b;
			$arr[]=1;
			$arr[]=2;
			$arr[]=3;
			$arr[]=4;
			$arr[]=5;
				//Ассоциативные массивы
				$arr = ['a'=>1, 'b'=>2, 'c'=>3];
				echo $arr[c], ' ';
					$arr = ['a'=>1, 'b'=>2, 'c'=>3];
					echo $result = $arr[a]+$arr[b]+$arr[c],' ';
						$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
						echo $arr[Коля], ' ';
						echo $arr[Петя], ' ';
							$arr = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
							echo $arr[3], ' ';
							$day = 3;
							echo $arr[$day],' ';
							 //Многомерные массивы
							$arr = [
							    'cms'=>['joomla', 'wordpress', 'drupal'],
							    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
							];
							echo $arr[cms][0],' ';
							echo $arr[cms][2],' ';
							echo $arr[colors][green],' ';
							echo $arr[colors][red],' ';

							$arr = [
								ru => [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
								en => [1=>'mon', 'tue', 'wed', 'thu', 'fr', 'sat', 'sun ']
							];
							echo $arr[ru][1],' ';
							echo $arr[en][3],' '; 
							$lang = ru;
							$day= 3; 
							echo $arr[$lang][$day];
 ?>