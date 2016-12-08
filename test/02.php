<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/8
 * Time: 19:23
 */
for($i=0;$i<9;$i++){
    for($j=9;$j>$i;$j--){
        echo"&nbsp;";
    }
      for($j=0;$j<=$i;$j++){
          echo"*&nbsp;";
      }
      echo"<br>";
}
?>