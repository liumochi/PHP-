<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		
		//insert into blog3(bid,title,content,time) values(null,'$title','$con',now());
		
		$sql="insert into blog(bid,title,content,time) values(null,'$title','$con',now());";
		//echo $sql;
		$query=mysqli_query($link,$sql);
		if($query){
			//echo "ok";
			//echo "<script>alert('发表成功')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			//echo "error";
			//echo "<script>alert('发表成功')</script>";
			header("location:add.php");
		}
	}

?>

<meta charset="UTF-8">
<form action="add.php" method="post">
	标题：<input type="text" name="title"><br />
	内容：<textarea cols="20" rows="5" name="con"></textarea><br />
	<input type="submit" name="sub" value="发表">
</form>