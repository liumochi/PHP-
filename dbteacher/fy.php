<?php 
	include "conn.php";
	/* 给表添加50条数据
	for($i=1;$i<50;$i++){
		$name='name'.$i;
		$sql="insert into fy(fid,fname) values(null,'$name')";
		mysqli_query($link,$sql);
	} */
	//1:传入页码
	$page=$_GET['p'];
	//2:根据页码取出数据
	$sql="select * from fy limit ".(($page-1)*10).",10";
	$query=mysqli_query($link,$sql);
	echo "<table align='center' width='500' border=1 cellspacing='0'>";
	echo "<tr>";
	echo "<td>"."id"."</td>";
	echo "<td>"."name"."</td>";
	echo "</tr>";
	while($rs=mysqli_fetch_array($query)){
		//echo $rs['fid']."&nbsp;".$rs['fname']."<br />";
		echo "<tr>";
		echo "<td>".$rs['fid']."</td>";
		echo "<td>".$rs['fname']."</td>";
		echo "</tr>";
	}
	
	//显示分页条
	$sql="select count(*) as allnum from fy";
	$query=mysqli_query($link,$sql);
	$all=mysqli_fetch_array($query);
	$pageall=ceil($all['allnum']/10);
	//echo $pageall;
	//die();
	//echo $_SERVER['PHP_SELF'];
	$page_banner="<a href='?p=".(($page-1)<=1?1:($page-1))."'>上一页</a>";
	// $page_banner.="<a href='?p=".(($page+1)>=5?5:($page+1))."'>下一页</a>";
	$page_banner.="<a href='?p=".(($page+1)>=$pageall?$pageall:($page+1))."'>下一页</a>";
	echo "<tr>";
	echo "<td colspan='2'>";
	echo $page_banner;
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	
	

?>








