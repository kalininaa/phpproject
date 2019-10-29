<?php

 echo strtoupper('php ');
 echo strtolower('PHP ');
 echo ucfirst('london ');
 echo lcfirst ('London ');
 echo ucwords('london is the capital of great britain ');
 echo ucfirst(strtolower('LONDON '));

// Работа с substr 
 echo substr('html css php', 0, 4), '<br>';
 echo substr('html css php', 5, 3), '<br>' ;
 echo substr('html css php', 9, 3), '<br>' ;

 echo substr('html css php', -3 ), '<br>' ;
 if ( substr('http://apple.com', 0, 7)=='http://' )
    echo 'yes', '<br>' ;
else
    echo 'no', '<br>' ;
 
function string($htt)
{
 if ( substr($htt, 0, 7)=='http://' or substr($htt, 0, 8)=='https://')
    echo 'yes', '<br>' ;
else
    echo 'no', '<br>' ;
}
string('https://');

function str($format)
{
 if ( substr($format, -4)=='.png' or substr($format, -4)=='.jpg')
    echo 'yes', '<br>' ;
else
    echo 'no', '<br>' ;
}
str('gold.jpg');

function five($c)
{
 if (iconv_strlen($c)>5)
    echo substr($c, 0, 4).'...', '<br>' ;
else
    echo $c, '<br>' ;
}
five('golden');

// Работа с str_replace
    echo str_replace('.', '-', '31.12.2013'), '<br>' ;

    echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abcabc'), '<br>';

    echo str_replace(['0','1','2','3','4','5','6','7','8','9'],'', '1a2b3c4b5d6e7f8g9h0'), '<br>';

    //Работа с strtr
    $str = ' abcdeabcde ';
    echo strtr($str, 'abc', '123'), '<br>';
    echo strtr($str, ['a'=>1, 'b'=>2, 'c'=>3]), '<br>';

   //Работа с substr_replace
    $str = 'change yourself';
     echo substr_replace($str, '!!!', 2, 5), '<br>';

// Работа с strpos, strrpos
    echo strpos('abc abc abc', 'b'), '<br>';
    echo strrpos('abc abc abc', 'b'), '<br>';
    echo strpos('abc abc abc', 'b'), '<br>';
    $text = 'html css php';

//Работа с explode, implode
    $arr = explode(' ', $text);
    var_dump($arr);

    $arr = ['html', 'css', 'php'];
    $text = implode(',', $arr);
    echo $text, '<br>';

// Работа с str_split
    $arr = str_split('1234567890',2);
    var_dump($arr);

// Работа с  trim,  ltrim, rtrim
    echo trim(' Hello World '), '<br>';
    echo trim('/php/', '/'), '<br>';

    echo rtrim('слова слова слова.','.'),'.<br>';

//Работа с strip_tags и htmlspecialchars
    echo strip_tags('html, <b>php</b>, js'), '<br>';
    $str = 'html, <b>php</b>, js, <i>hello</i> <span> Родная </span>';
    echo htmlspecialchars(strip_tags($str, '<b>, <i>')), '<br>';
//Работа с strstr
    echo strstr('ab--cd--ef', '--'), '<br>';
 // Задачи
    $string = 'var_test_text';
    $a=lcfirst(ucwords(str_replace('_', ' ', $string))) ;
    echo str_replace(' ', '', $a), '<br>';


    $arr = [ 13, 20, 8, 73, 18, 32];
    foreach ($arr as $elem) {
        if (strpos($elem, '3') !== false)
            echo $elem, ' ';
    }

    






?>

