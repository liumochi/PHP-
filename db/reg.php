<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 10:24
 */
include "conn.php";
if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $arr =array('%','#','=');
    $flag = true;
     for($i=0;$i<strlen($name);$i++){
         for($j=0;$j<count($arr);$j++){
             if($name[$i] == $arr[$j]){
                 $flag = false;
             }
         }
     }
     if($flag == false){
         echo "<script>alert('用户名非法')</script>";
     }else{
         $sql = "select * from user where uname='$name'";
         $query = mysqli_query($link,$sql);
         $rs = mysqli_fetch_array($query);
         if($rs){
             echo "<script>alert('用户名已存在')</script>";
         }else{
                $sql = "insert into user(uid,uname,pass) values(null,'$name','$pass')";
                $query = mysqli_query($link,$sql);
                if($query){
                    header('location:login.php');
                }
         }
     }

}


?>
<meta charset="utf-8">
<form action="reg.php" method="post" id="f1">
    用户名：<input type="text" name="name"><br />
    密码：<input type="password" name="pass" id="p1"><br />
    重复密码：<input type="password" name="rename" id="rp1"><br />
    <input type="submit" name="sub" value="注册" id="i1">
</form>
<script>
    var oP1 = document.getElementById('p1');
    var oRp1 = document.getElementById('rp1');
    var oNext = oRp1.nextSibling;
    var oForm = document.getElementById('f1');
    var oInput = document.getElementById('i1');
    oRp1.onblur = function () {
        if(oP1.value!=oRp1.value){
            var oSpan = document.createElement('span');
            oSpan.innerHTML='密码不一致';
            oForm.insertBefore(oSpan,oNext);

        }
    }
</script>
