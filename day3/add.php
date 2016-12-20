<?php
include "conn.php";
if(isset($_POST['sub'])){
    $title=$_POST['title'];
    $con=$_POST['con'];


//1.拼写字符串
$sql="insert into blog(bid,title,content,time) values(null,'$title','$con',now())";
//2.string 发送给数据库 string->resource
$query = mysqli_query($link,$sql);
    if($query){
        echo "<script>alert('插入数据成功')</script>";
        echo "<script>location='index.php'</script>";
    }else{
        echo "<script>alert('插入数据失败')</script>";

        header('location:add.php');//包头执行在包体之前!
    }
}



?>
<meta charset="utf-8">
<form action="add.php" method="post">
    标题：<input type="text" name="title"><br />
    内容:<textarea cols=20 rows=10 name="con"></textarea>
    <input type="submit" name="sub" value="添加">



</form>