
<?php
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
//    echo $id;
//    die();
    //进行访问量加1操作
    $sql="update blog set hits=hits+1 where wid='$id'";
//    echo $sql;
//    die();
    $query=mysqli_query($link,$sql);
    if($query){
        $sql="select * from blog where wid='$id'";
        $query=mysqli_query($link,$sql);
        $rs=mysqli_fetch_array($query);
    }else{
        echo "error";
    }

}

?>

<h3>标题:<?php echo $rs['title']?></h3>
<span>访问量:<?php echo $rs['hits']?></span><br />
<p>内容:<?php echo $rs['content']?></p><br />
<form action="all.php?id=<?php echo $rs['wid']?>" method="post">
    <textarea name="plcon" id="" cols="30" rows="10"></textarea><br />
    <input type="submit" name="sub" value="评论">

</form>
<?php
if(isset($_POST['sub'])){
    $pcon = $_POST['plcon'];
    $wid = $_POST['wid'];
    $uid = $_COOKIE['uid'];
    $sql = "insert into pl(pid,pcon,ptime,wid,uid) values(null,'$pcon',now(),'$wid','$uid')";
    $query = mysqli_query($link,$sql);
    if($query){
        header("location:all.php?id=$wid");
    }

}
?>
<?php
    $sql ="select * from pl,user where user.uid=pl.uid and wid='$id'";
    $query = mysqli_query($link,$sql);
    while($rs=mysqli_fetch_array($query)) {

        ?>
        <p>评论内容：<?php echo $rs['pcon']?></p>
        <span>评论人：<?php echo $rs['uname']?></span>
  <?php
    }
?>
