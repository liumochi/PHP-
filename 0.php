<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/2
 * Time: 16:29
 */
$a=2;
$b=$a++ + ++$a;  //a++ 用了在加 ++a 加了再用
//echo $b;
$c = --$b - $b--;
echo $c;
?>

