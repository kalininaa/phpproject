<?php 	
// Работа с count 
$arr = [1=>'b', 'v', 'g', 'd'];
echo count($arr), '<br>';
echo $arr[count ($arr)], '<br>';

// Работа с in_array 
$arr = [1, 2, 3, 4, 5];
var_dump(in_array(3, $arr));
echo  '<br>';

$arr = [1,2,3,4,5];
echo array_sum($arr), '<br>';

$arr = [1,2,3,4,5];
echo array_product($arr), '<br>';

$arr = [1,2,4,5,7];
echo array_sum($arr)/count($arr);
echo  '<br>';
// Работа с range
$arr = range (1,100);
var_dump($arr);
echo  '<br>';
$arr = range (a,z);
var_dump($arr);
echo  '<br>';
$arr = range (1, 9);
echo implode('-', $arr), '<br>';
//Работа с array_merge
$arr = [1,2,3];
$ar = ['a', 'b', 'c'];
$result = array_merge($arr, $ar);
var_dump($result);
echo '<br>';
// работа с array_slice
$arr = [1, 2, 3 , 4, 5];
$res = array_slice($arr, 1, 3); 
var_dump($res);
echo '<br>';
// Работа с array_splice
$arr = [1, 2, 3 , 4, 5];
array_splice($arr, 1,2);
echo '<br>';
var_dump($arr);
echo '<br>';

$arr = [1, 2, 3, 4, 5];
$res=array_splice($arr, 1 , 3);
var_dump($res);
echo '<br>';
$arr = [1, 2, 3, 4, 5];
array_splice($arr,2,0,['a', 'b', 'c']);
var_dump($arr);
echo '<br>';
// Работа с array_keys, array_values, array_combine
$arr = [ 'a'=>1, 'b'=>2, 'c'=>3 ];
$keys = array_keys($arr);
var_dump($keys);
echo '<br>';
$values = array_values($arr);
var_dump($values);
echo '<br>';
$comb=array_combine($keys, $values);
var_dump($comb);
echo '<br>';
//Работа с array_flip, array_reverse
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump (array_flip($arr));
echo '<br>';
$arr = [1, 2, 3, 4, 5];
var_dump(array_reverse($arr));
echo '<br>';
//Работа с array_search
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$n=array_search('-', $arr);
echo $n,'<br>';
array_splice($arr, $n, 1);
var_dump($arr);
// Работа с array_replace
$arr = ['a', 'b', 'c', 'd', 'e'];
$s=array_replace($arr, [0 => '!' , 3 => '!!']);
var_dump($s);

$line = '1234567890';
$arr = str_split($line,1);
echo array_sum($arr);
echo '<br>';
$ar=range(1, 3);
$ra = range(a, c);
$arr = array_combine($ar, $ra);	
var_dump($arr);
echo '<br>';

$a = range(1, 9);
$b = array_chunk($a, 3);
echo '<br>';
var_dump($b);









?>