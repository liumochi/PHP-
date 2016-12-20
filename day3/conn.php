<?php
     //1:打开数据库连接
      $link = @mysqli_connect('localhost','root','') or die('数据库连接失败');

     //2:选择数据库
      mysqli_select_db($link,'blog5');

     //3:传输编码
      mysqli_set_charset($link,'utf8');
?>