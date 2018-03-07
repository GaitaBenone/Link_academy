<?php
$w = '10';
$x = 10;
$y = 20;
$z = -5;
echo '$x='.$x.'<br>';
echo '$y='.$y.'<br>';
echo '$z='.$z.'<br>';

echo 'var_dump($x > $y) printeaza: ';
var_dump($x > $y);
echo '<br>';

echo 'var_dump($x < $y) printeaza: ';
var_dump($x < $y);
echo '<br>';

echo 'var_dump($x == $y) printeaza: ';
var_dump($x == $y);
echo '<br>';

echo 'var_dump($x == $w) printeaza: ';
var_dump($x == $w);
echo '<br>';

echo 'var_dump($x === $w) printeaza: ';
var_dump($x === $w);
echo '<br>';

echo 'var_dump($x != $y) printeaza: ';
var_dump($x != $y);
echo '<br>';

echo '$x++ printeaza: '.$x++.'<br>';
echo '+$x printeaza: '.+$x.'<br>';
echo '++$x printeaza: '.++$x.'<br>';
echo '$x+= printeaza: '.++$x.'<br>';


// strings

$x = 'eu sunt <br>';
$y = 'Benone <br>';
$z = $x . $y;
echo '<br>';
echo 'concatonarea z = x . y printeaza: ';
var_dump($z);

$x .= $y;
var_dump($x);

$arr1 = array('a' => 10, 'b' => 20);
$arr2 = array('b' => 20, 'a' => 10);

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

echo (int)'a';
echo (int)'v';
echo (int)'b';
echo (int)'nerte';
echo (int)'2h';
echo (int)'vp1';


 ?>
