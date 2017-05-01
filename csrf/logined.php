<?php

session_start();
    if($_SESSION["check"]=="true"){
        echo "<p>登录成功！！</p>";
//        echo "<a href='unlogin.php'>注销</a>";
//        echo "<br>";
        echo "<a href='attack.php'>攻击</a>";
    }
    else{
        echo "<script>location='login.php'</script>";
    }
?>