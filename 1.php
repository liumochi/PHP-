<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/2
 * Time: 13:28
 */
//var_dump($_get['year']);
//四个标量类型：int float  string bool
//两个复合类型：array object
//两个特殊类型：resource null
//echo只能输出标量类型，若想输出复合类型
//$arr = arr(1,2,3);
//echo"<pre>";
//print r($arr);
//echo"</pre>";
//var_dump($arr)；




if(isset($_GET['sub'])){
    $year = $_GET['year'];
    echo $year;
}
?>
<meta charset="utf-8">
<form action="" method="">
    year:<input type="text" name="year">
    <input type="submit" name="sub" value="提交">
</form>