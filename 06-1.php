<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/6
 * Time: 13:30
 */
$j=1;
while($j<=9){
    $i=1;
    while($i<=$j){
        echo"{$j}*{$i} = ".$j*$i."";
        $i++;
    }
    echo"<br/>";
    $j++;
}


?>