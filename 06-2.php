<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/6
 * Time: 13:42
 */
$j=1;
do {
    $i = 1;

    do {
          echo"{$j}*{$i} = ".$j*$i."";
          $i++;
    }while($i<=$j);
        echo"<br/>";
        $j++;
    }while($j<=9);




?>