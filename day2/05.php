
<html>
<head>
    <title>猜拳游戏</title>
    <script>
        function myChange(obj) {
            var val = obj.value;
            var myimag = document.getElementById('myimg');
            if(val =='2'){
                   myimag.src="qt.jpg";
            }else if(val =='1'){
                myimag.src="jz.jpg";
            }else if(val =='0'){
                myimag.src="b.jpg";
            }
        }
    </script>
</head>
<body>
<form action="05.php" method="post">
    请出拳
    <select name="you" onclick="myChange(this)">
        <option value="2">拳头</option>
        <option value="1">剪子</option>
        <option value="0">布</option>
    </select>
    <img src="cq.jpg" alt="" id="myimg">
    <input type="submit" name="sub">
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9
 * Time: 15:16
 */
$cq = $_POST["you"];
switch ($cq){
    case"0":
        echo"布";
        break;
    case"1":
        echo"剪子";
        break;
    case"2":
        echo"石头";
        break;
}
echo"<br />";
$dn=rand(0,2);
if($dn>$cq){
    echo"电脑获胜";
}else if($dn<$cq){
    echo"你获胜了";
}else{
    echo"平局";
}


?>


