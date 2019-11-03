<?php
	$arr = [1,2,3,4,6,7];
	$flag = false;

	foreach ($arr as$elem) {
		if ($elem == 5)
			$flag=true;
	}
	if ($flag === true)
		echo ' есть '.'<br>';
	else
		echo ' нет  '.'<br>' ; 
		
	$num = 31;
	$flag =false;
	for ($i=2; $i<$num; $i++){
		if ($num % $i==0)
		{
			$flag=true;
		}
	}
		if($flag==true)
		{
			echo ' делится без остатка '.'<br>';
		}
		else {
			echo ' не делится без остатка '.'<br>';
		}
	
	$arr = [1,2,3,4,5,5,6,7,8];
	$flag = false;
	$a=count($arr);
	echo $a.'<br>';

	for ($i=0; $i < ($a-1); $i++) { 
		$j=$i+1;
		if ($arr[$i]== $arr[$j]){
			$flag = true;
		}
}



	if($flag==true)
		{
			echo ' да '.'<br>';
		}
		else {
			echo ' нет '.'<br>';
		}












?>