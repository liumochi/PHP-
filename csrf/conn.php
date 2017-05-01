<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/16
 * Time: 14:36
 */
//1打开数据库连接
 $link=@mysqli_connect("localhost","root","") or die("数据库连接失败");
//2选择数据库
 mysqli_select_db($link,'sql');
//3定义传输编码
 mysqli_set_charset($link,"utf8");

?>