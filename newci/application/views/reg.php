<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/14
 * Time: 9:40
 */
?>
<base href="<?php echo site_url()?>">
<link rel="stylesheet" href="assets/css/1.css">
<script src="assets/js/jquery.min.js"></script>
<meta charset="utf-8">
<div id="div1">
<form action="<?php echo site_url('user/do_reg')?>" method="post">
    用户名：<input type="text" name="name" id="i1"><br />
    密码：<input type="password" name="pass" id="p1"><br />
    重复密码：<input type="password" name="rpass" id="p2"><br />
    <input type="submit" name="sub" value="注册">
</form>
</div>
<script>
    $(function () {
        $('#p2').blur(function () {
            var pass=$('#p1').val();
            var rpass=$('#p2').val();
            if(pass!=rpass){
                var oSpan=$('<span id="s1">密码不一致</span>');
                $(this).after(oSpan);

            }
        });
            $('#p2').focus(function () {
                $('#s1').remove();

            });
            $('#i1').blur(function () {
                var name=$(this).val();
                $.post('<?php echo site_url('user/checkname')?>','uname='+name,function (data) {
                    if(data=='success'){
                        var oSpan=$('<span id="s1">用户名重名</span>');
                        $('#i1').after(oSpan);
                    }
                })
            })
    });
</script>

