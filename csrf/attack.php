<?php
include "conn.php";
session_start();
if(isset($_SESSION["check"])&&isset($_SESSION["id"])){
    if(isset($_GET["password"])){
        $id=$_SESSION["id"];
        $pwd=$_GET["password"];
        $sql="update user set password='$pwd' where uid=$id";
        $query=mysqli_query($link,$sql);
        if($query){
            echo "<script>location='attacked.php';</script>";
        }else{

            echo"<script>alert('修改失败');</script>";
        }
    }
}
?>
<form action="" method="get">
    修改密码:<input type="password" name="password"><br/>
    <input type="submit" name="sub" value="修改">
</form>
