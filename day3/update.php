<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$sql="select * from blog where bid='$id'";
		$query=mysqli_query($link,$sql);
		$arr=mysqli_fetch_array($query);
	}
	
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$hid=$_POST['hid'];
		$sql="update blog set title='$title',content='$con' where bid='$hid'";
		
		//echo $sql;
		//die();
		
		$query=mysqli_query($link,$sql);
		if($query){
			header("location:index.php");
		}else{
			echo "error";
		}
	}
?>

<meta charset="utf-8">
<form action="update.php" method="post">
	<input type="hidden" name="hid" value="<?php echo $arr['bid']?>">
	标题：<input type="text" name="title" value=<?php echo $arr['title']?>><br />
	内容：<textarea cols="20" rows="5" name="con"><?php echo $arr['content'];?></textarea><br />
	<input type="submit" name="sub" value="修改">
</form>







