<a href='add.php'>添加文章</a>&nbsp;&nbsp;
<?php
	if(isset($_COOKIE['id'])){
		$id=$_COOKIE['id'];
		$name=$_COOKIE['name'];
		echo $name." 已登录"."&nbsp;";
		echo "<a href='unlogin.php?id='".$id.">注销</a>";
	}else{
		echo "<a href='login.php'>未登录</a>";
	}

?>
<br />

<form action="index.php" method="get">
	<input type="text" name="search">
	<input type="submit" name="sub" value="搜索">
</form>
<?php
	include "conn.php";
	
	//select * from blog where bid=1
	if(isset($_GET['sub'])){
		$s=$_GET['search'];
		$w="title like '%".$s."%'";
	}else{
		$w=1;
	}
	
	
	$sql="select * from blog where $w order by bid desc";
	
	//echo $sql;
	//die();
	$query=mysqli_query($link,$sql);
	
	//var_dump($query);
	//$arr=mysqli_fetch_array($query);
	//$arr=mysqli_fetch_array($query);
	//var_dump($arr);
	
	while($arr=mysqli_fetch_array($query)){
		//var_dump($arr);
		//die();
?>

标题:<a href="edit.php?id=<?php echo $arr['bid'];?>"><span><?php echo $arr['title']?></span></a> |<a href="update.php?id=<?php echo $arr['bid'];?>">修改</a> |<a href="del.php?id=<?php echo $arr['bid'];?>">删除</a><br />
时间:<span><?php echo $arr['time']?></span><br />
内容:<p><?php echo iconv_substr($arr['content'],0,2)?>...</p>
<hr />



<?php
	}
?>