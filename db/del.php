<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 20:07
 */
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "delete from where blog wid='$id'";
    $query = mysqli_query($link,$sql);
    if($query){
        echo "<script>location='index.php'</script>";
    }else{
        echo "删除失败";
    }
}


?>

