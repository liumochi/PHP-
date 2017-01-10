<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10
 * Time: 11:35
 */

include "conn.php";
if(isset($_POST['sub'])){
    echo "aa";
    $title = $_POST['title'];
    $cid = $_POST['cid'];
    $con = $_POST['con'];
    $sql = "insert into blog(wid,title,content,time,cid) values(null,'$title','$con',now(),'$cid')";
    $query = mysqli_query($link,$sql);

    if($query){
        header('location:index.php');
    }else{
        header('location:add.php');
    }

}


?>
<meta charset="utf-8">
<form action="add.php" method="post">
    标题: <input type="text" name="title">&nbsp;&nbsp;
    <select name="catalog">

        <?php
        $sql = "select * from catalog";
        $query = mysqli_query($link,$sql);
        while($rs = mysqli_fetch_array($query)){
        ?>
        <option value="<?php echo $rs['cid']?>"><?php echo $rs['cname']?></option>
        <?php
        }
        ?>
    </select><br/>
    内容: <textarea name="con"cols="30" rows="10"></textarea>
    <input type="submit" name="sub" values="添加">

</form>
