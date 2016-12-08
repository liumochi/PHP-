<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/8
 * Time: 19:21
 */
$score=82;
switch($score)
{
    case $score>=80 && $score<=100:
        echo "优秀<br>";
        break;

    case $score>=60 && $score<80:
        echo "及格<br>";
        break;
    case $score>=0 && $score<60:
        echo "不及格<br>";
        break;
    default:
        echo"成绩输入错误<br>";
}
?>