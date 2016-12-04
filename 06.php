<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/4
 * Time: 19:59
 */
$color="";
echo"<table width='1000px' aline='center' border='1'>";
for($i=1;$i<=9;$i++){
    if($i % 2 == 0){
       $color="red";
    }else{
        $color="pink";
    }

    echo"<tr bgColor=".$color.">";
    for($j=1;$j<=$i;$j++){
        echo'<td>';
        echo"{$i}*{$j} =".($i*$j)."";
        echo'</td>';
    }
    echo"</tr>";
}
echo"</table>"







?>