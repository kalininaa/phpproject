<?php 

// работа с foreach 
$arr= [ 'html', 'css', 'php', 'js', 'jq' ];
foreach ($arr as $lang) 
{
	echo $lang, ' ';
}


$arr = [ 1, 2, 3, 4, 5 ];
foreach ($arr as $elem)
{
	$result = $result + $elem;
}
echo $result, ' ';


$arr = [1, 2, 3, 4, 5];
	$result = 0;
	foreach ($arr as $elem) {
		$result += $elem*$elem;
	}
	echo $result  . '<br/><br/>';

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
	foreach ($arr as $key => $color)
	 {
			echo $key.'-'.$color.' <br> ' ;
		}	

$arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
	foreach ($arr as $key => $money)
	 {
			echo $key.' зарплата '.$money.' долларов ',' <br> ';
		}	

$a=1;
while ($a<=100)
{
	echo $a.'<br>'.'<br>';
	$a++;
}
echo '////////'.'<br>';
$a=11;
while ($a<=33)
{
	echo $a.'<br>'.'<br>';
	$a++;
}
echo '////////'.'<br>';
$a=0;
while ($a%2==0 and $a<=100 )
{
	echo $a.'<br>';
	$a+=2;
}
echo '////////'.'<br>';

$i=0;
$sum=0;
while ($i<=100)
{    
	 $sum=$sum+$i;
	 $i++;

}
echo $sum;
 echo '//////'.'<br>';

for ($i=0; $i<=100; $i++)
{
	echo $i.'<br>';
}

for ($i=11; $i<=33; $i++)
{
	echo $i.'<br>';
}
for ($i=0; $i<=100; $i+=2)
{
	echo $i.'<br>';
}

for ($i=0, $sum=0; $i<=100; $sum=$sum+$i, $i++ )
{

}
echo $sum, ' <p> Задачи <br> </p> ';

$arr= [ 2, 5, 9, 15, 0, 4 ];
foreach ($arr as $num) 
{
	if ($num>=3 and $num<10)
		echo $num, '<br>';
}
echo  '<p> //// </p> <br>';

$arr = [  1, -2, 3 , 4, -5 ];
$res=0;
foreach ($arr as $num) 
{
	if ($num>=0)
		$res+=$num;
}
echo $res;
echo  '<p> //// </p> <br>';

$arr = [ 1, 2, 5, 9, 4, 13, 4, 10 ];
foreach ($arr as $num)
{
	if  ($num == 4)
		{
			$num=' Есть	' ;
			break;
		}
	
}
		echo 'Есть', '<br>';


$arr = [ '10', '20', '30', '50', '235', '3000' ];
foreach ($arr as $num )  {
	if ($num[0]==1 or $num[0]==2 or $num[0]==5 )
		{
			echo $num,'<br>';
		}
}
echo '<br>';

$arr = [ 'mon','tue','wed','thu','fri','sat','sun' ];
foreach ($arr	as   $day)
{
	if ($day == sat)
	$day= '<i>'.$day.'</i>' ; 
    echo $day,' ';

}
$arr= [];

for ($i=1; $i<=100; $i++) {
	
	$arr[] = $i;


}
var_dump($arr);
echo '<br>';

$arr = [ 

	ru  =>	'  ',
	en  =>	'  ' 
];

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
  foreach ($arr as $key=>$elem) {
    $en[] = $key;
    $ru[] = $elem;
}
  var_dump($en);
  var_dump($ru);


$num= 1000;
$i=0;
while ($num/2>=50)
{
 $num/=2;
 $i++;
}
echo $num, ' ///////// ';
echo $i, ' ///////// ';


for ($i=0, $num=1000; $num/2>=50; ++$i)
{
	$num/=2;
}
echo $num, ' ///////// ';
echo $i , ' ///////// ';












 ?>