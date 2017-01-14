<?php

?>

<meta charset="utf-8">
<form action="<?php echo site_url('user/do_login')?>" method="post">
    <input type="hidden" name="uri" value="<?php echo $uri?>">
    用户名:<input type="text" name="name"><br />
    密码：<input type="password" name="pass" id="p1"><br />
    <input type="submit" name="sub" value="登录">
</form>
