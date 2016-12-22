<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		//echo $id;
		//die();
		//进行访问量加1操作
		$sql="update blog set hits=hits+1 where bid='$id'";	
		//echo $sql;
		//die();
		$query=mysqli_query($link,$sql);
		if($query){
			$sql="select * from blog where bid='$id'";
			$query=mysqli_query($link,$sql);
			$arr=mysqli_fetch_array($query);
		}else{
			echo "error";
		}

	}

?>

标题：<span><h3><?php echo $arr['title'];?></h3></span><br />
时间：<li><?php echo $arr['time'];?></li>
<p>访问量：<?php echo $arr['hits'];?></p>
<p>内容：<?php echo $arr['content'];?></p>


