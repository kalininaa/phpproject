<?php
    echo date('d-m-Y', strtotime('now')).'<br>';
    echo date ('d-m-Y', strtotime('01.03.2025')).'<br>';
    $date1 =  '2025-12-31';
    $date2 =  '2021-11-03';
    $res = ($date1>$date2);
    if ($res == true)
    	echo $date1, '<br>';
    else 
    	echo $date2, '<br>';

  	$date=date_create('2025-12-31');
  	$date=date_modify($date, '1day');
  	echo date_format($date, 'd.m.Y').'<br>';

  	// Задачи
  	
  	$day = 21;
  	$mounth = 12;
  	$year = 2019;
  	$time = $day.'.'.$mounth.'.'.$year;
  	if ($day < 31 or $mounth < 12)
  	{
  		while ($day<31)
  		{
  			$day++;
  		}
  		while ($mounth<12)
  		{
  			$mounth++;
  		}
  		$time = $day.'.'.$mounth.'.'.$year;
  		echo $time.'<br>'; 
  		
  	}
  	else 
  		echo $time.'<br>';
  	?>
<html>

  	<form action = '' method = 'GET'>
  		<input type ='text' name = 'year'>
  		<input type="submit">
  	</form>

<?php 

if (isset($_REQUEST['year'])) { 
$y=$_REQUEST['year']; 
for ($i=1;$i<13;$i++){ 
if (date('w', mktime(0,0,0,$i,13,$y))==5){ 
$a[]=date('d.m.Y', mktime(0,0,0,$i,13,$y)); 
} 
}} 
var_dump($a); 
?>
</html>











?>