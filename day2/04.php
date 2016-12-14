<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9
 * Time: 14:45
 */
$str="dsfdlfkjewignlwnnwknvlkwnbbiob3b";
$ss="";
$num=strlen($str)-1;
$arr=array();
for($i=0;$i<8;$i++){
     $mm=$str[rand(0,$num)];
     if(!in_array($mm,$arr)){
             $arr[$i]=$mm;
     }else{
         $i--;
     }
}
for($j=0;$j<count($arr);$j++){
$ss.=$arr[$j];
}
echo $ss;

?>