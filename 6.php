<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/2
 * Time: 20:01
 */
echo"<table width='800' border='1'>";
for($i=1;$i<=9;$i++){
    echo"<tr>";
    for($j=1;$j<=$i;$j++){
        echo"<td>{$i}*{$j} = ".($i*$j)."</td>";
    }
//    echo"</br>";
    echo"</tr>";
}
echo"</table>";
?>




