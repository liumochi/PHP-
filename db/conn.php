<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10
 * Time: 11:31
 */
    $link = @mysqli_connect('localhost','root','') or die('数据库连接失败');

    mysqli_select_db($link,'blog6');

    mysqli_set_charset($link,'utf8');



?>