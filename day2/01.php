<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9
 * Time: 13:34
 */
echo"<a href='01.php?action=add'>执行增加</a>>";
echo"<br />";
echo"<a href='01.php?action=del'>执行删除</a>>";
echo"<br />";
echo"<a href='01.php?action=search'>执行搜索</a>>";
echo"<br />";
echo"<a href='01.php?action=update'>执行更新</a>>";
echo"<br />";
$value = $_GET['action'];
switch($value){
    case 'add';
    echo"<script>alert('增加功能')</script>";
    break;

}



?>