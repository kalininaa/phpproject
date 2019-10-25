<?php 

    $a;
    if(empty($a)) 
         echo ' верно ';
    else echo ' неверно ';


    $a=1;
    if(empty($a)) 
         echo ' верно ';
    else echo ' неверно ';    
    $a=0;
    if(empty($a)) 
         echo ' верно ';
    else echo ' неверно ';
    $a=-3;
    if(empty($a)) 
         echo ' верно ';
    else echo ' неверно ';


    $a;
    if($a>0) 
        echo ' Верно ';
    else 
        echo ' Неверно '; 
    $a=1;
    if($a>0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=0;
    if($a>0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=-3;
    if($a>0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    echo '/ / / / / / / / / / ';
    $a;
    if($a<0) 
        echo ' Верно ';
    else 
        echo ' Неверно '; 
    $a=1;
    if($a<0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=0;
    if($a<0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=-3;
    if($a<0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';    

echo '/ / / / / / / / / / ';
    $a;
    if($a>=0) 
        echo ' Верно ';
    else 
        echo ' Неверно '; 
    $a=1;
    if($a>=0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=0;
    if($a>=0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=-3;
    if($a>=0) 
        echo ' Верно ';
    else 
        echo ' Неверно '; 
echo '/ / / / / / / / / / ';
    $a;
    if($a<=0) 
        echo ' Верно ';
    else 
        echo ' Неверно '; 
    $a=1;
    if($a<=0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=0;
    if($a<=0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=-3;
    if($a<=0) 
        echo ' Верно ';
    else 
        echo ' Неверно ';    

    $a= 'test';
    if($a==test)
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a= ' тест ';
    if($a==test)
        echo ' Верно ';
    else 
        echo ' Неверно ';                 

    $a= ' 1 ';
    if($a===1)
        echo ' Верно ';
    else 
        echo ' Неверно ';

//Работа с empty и isset 
    echo '/ / / / / / / / / /' ;
    $a;
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=1;
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=3;
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';    
    $a=-3;
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=0;
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=null;
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a=true;
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a='';
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';
    $a='0';
    if(empty($a))
        echo ' Верно ';
    else 
        echo ' Неверно ';

    
// Работа с Or и And
echo '/ / / / / / / // / / / ';
$a=5;
if($a > 0 and $a < 5)
    echo ' Верно ';
else 
    echo ' Неверно ';
$a=0;
if($a > 0 and $a < 5)
    echo ' Верно ';
else 
    echo ' Неверно ';
$a=-3;
if($a > 0 and $a < 5)
    echo ' Верно ';
else 
    echo ' Неверно ';
$a=2;
if($a > 0 and $a < 5)
    echo ' Верно ';
else 
    echo ' Неверно ';

$b=5;
 if($b==0 or $b==2) 
 {
    echo $b+=7;
 }
 else 
 {
    echo $b/=10;
 }
 echo ' ';
$b=0;
 if($b==0 or $b==2) 
 {
    echo $b+=7;
 }
 else 
 {
    echo $b/=10;
 }
 echo ' ';
$b=-3;
 if($b==0 or $b==2) 
 {
    echo $b+=7;
 }
 else 
 {
    echo $b/=10;
 }
 echo ' ';
$b=2;
 if($b==0 or $b==2) 
 {
    echo $b+=7;
 }
 else 
 {
    echo $b/=10;
 }
echo ' ';

// На switch-case

  switch ($num) {
        case '1':
            echo ' winter ';
        break;
        case '2':
            echo ' summer ';
        break;
        case ' 3 ':
            echo ' outumn ';
        break;
        default:
            echo ' times ';
        break;
    }

// задачи 
    $day=31;
    if($day<=10 and $day>=1)
    {
        echo ' первая декада ';
    }
    if($day>=11 and $day<=20 )
    {
        echo ' вторая декада ';
    }
    if($day>=21 and $day<=31)
    {
        echo ' третья декада ';
    }
 

    $month=9;
    if ($month>=1 and $month<=2 or $month==12)
    {
        echo ' winter ';
    }
    if ($month>=3 and $month<=5)
    {
        echo ' spring ';
    }
    if ($month>=6 and $month<=8)
    {
        echo ' summer ';
    }
    if ($month>=9 and $month<=11)
    {
        echo ' outumn ';
    }


    $year=1601;
    if($year%4==0 and $year%100!=0 or $year%400==0)
        echo ' год високосный ';
    else 
        echo ' год не является високосным '; 


    $a='abcde';
    if ($a[0]==a)
        echo 'yes';
    else
        echo 'no';


    

 ?>