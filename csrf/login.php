<?php
include "conn.php";
if(isset($_POST["sub"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select * from user where username='$username' and password='$password'";
    $query=mysqli_query($link,$sql);
    $rs=mysqli_fetch_array($query);

    if($rs){
        session_start();
        $_SESSION["check"]="true";
        $_SESSION["id"]=$rs["uid"];
        echo "<script>location='logined.php'</script>";
    }else{
        echo"<script>alert('登录失败！！')</script>";
        echo"<script>location='login.php'</script>";
    }
}
?>
<form action="login.php" method="post">
    用户名:<input type="text" name="username" value="<?php echo $user;?>"><br />
    密码:<input type="password" name="password"><br/>
    <input type="submit" name="sub" value="登录">
</form>
