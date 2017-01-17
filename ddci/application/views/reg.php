
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="zh-CN">
    <base href="<?php echo site_url()?>">
    <title>申请账号 - SYSIT个人博客</title>
    <link rel="stylesheet" href="assets/css/oschina2011.css" type="text/css" media="screen">
    <link rel="stylesheet" href="assets/css/thickbox.css" type="text/css" media="screen">
    <link rel="stylesheet" href="assets/css/osc-popup.css" type="text/css" media="screen">
    <script type="text/javascript" src="assets/js/jquery-1.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/thickbox.js"></script>
    <script type="text/javascript" src="assets/js/common.js"></script>
    <style type="text/css">
        body,table,input,textarea,select {font-family:Verdana,Simsun,sans-serif;}
    </style>
</head>
<body>
<div id="OSC_Screen">
    <div id="OSC_Content" class="CenterDiv"><style>
            #OSC_Footer {border:0;}
            .MainForm tr.hl th {border:1px solid #C00;border-right:0;background:#FEE;}
            .MainForm tr.hl td {border:1px solid #C00;border-left:0;background:#FEE;}
            .MainForm td .nodisp {display:none;padding-left:20px;}
            .MainForm tr.hl td .nodisp {display:inline;color:#C00;font-size:11pt;}
            #OSChinaLoginTip {font-size:10.5pt;padding:0 0 20px 10px;color:#060;}
            #OSChinaLoginTip ul {margin:10px 0 0 0;}
            #OSChinaLoginTip ul li {float:left; width:90px;margin-right:30px;}
            #OSChinaLoginTip ul li#openid_gmail img {margin-top:8px;}
            #OSChinaLoginTip ul li#openid_yahoo img {margin-top:15px;}
            #OSChinaLoginTip ul li#openid_msn img {}
            #OSChinaLoginTip ul li a {display:block;height:40px;}
            #OSChinaLoginTip ul li a {border:1px solid #fff;padding:2px;}
            #OSChinaLoginTip ul li a:hover {border:1px solid #40AA53;background:#cfc;}
        </style>

        <div class="MainForm" id="reg_page">
            <form id="frm_reg" action="user/do_reg" method="POST" style="float:left; width:620px;">
                <h2>申请<span style="color: #006600;"> SYSIT Blog</span> 账号，已经申请的请点击<a href="login.htm">这里</a>登录</h2>
                <div id="error_msg" class="error_msg" style="display:none"></div>
                <table cellpadding="0" cellspacing="0">
                    <tbody><tr id="tr_email">
                        <th nowrap="nowrap">电子邮箱：</th>
                        <td>
                            <input name="email" id="f_email" class="TEXT" style="width: 200px;" type="text">
                            <span id="email_tip" class="nodisp"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>姓名：</th>
                        <td><input name="name" id="f_name" maxlength="20" class="TEXT" style="width: 150px;" type="text">
                            <span id="name_msg">不能超过10个字</span>
                        </td>
                    </tr>
                    <tr>
                        <th>登录密码：</th>
                        <td><input name="pwd" id="f_pwd" class="TEXT" style="width: 150px;" type="password">
                            <span id="password_msg">至少四位</span>
                        </td>
                    </tr>
                    <tr>
                        <th>密码确认：</th>
                        <td><input name="pwd2" id="f_pwd2" class="TEXT" style="width: 150px;" type="password"></td>
                    </tr>
                    <tr id="tr_gender">
                        <th>性别：</th>
                        <td>
                            <input name="gender" value="1" id="gender_1" type="radio"><label for="gender_1">男</label>&nbsp;&nbsp;&nbsp;
                            <input name="gender" value="2" id="gender_2" type="radio"><label for="gender_2">女</label>
                            <span class="nodisp">请选择性别</span>
                        </td>
                    </tr>
                    <tr class="buttons">
                        <th>&nbsp;</th>
                        <td style="padding: 20px 0pt;">
                            <input value=" 注册新用户 " class="BUTTON SUBMIT" type="submit">
                        </td>
                    </tr>
                    </tbody></table>
            </form>
            <div id="reg_tip" class="tipbox" style="float:right;width:300px;">
                <h3>为什么要注册？</h3>
                <ol>
                    <li>发布博客</li>
                    <li>参与博客的讨论和评论</li>
                    <li>认识更多朋友</li>
                </ol>
                <h3 style="margin-top:20px;">为什么总提示验证码错误？</h3>
                <ol>
                    <li>首先请确定浏览器已经启用Cookie</li>
                    <li>实在不行，邮件给我们 admin@sysit.org</li>
                </ol>
            </div>
            <div class="clear"></div>
        </div>
     </div>
    <div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</body>
    <script>
    $(function () {
        $('#f_pwd2').blur(function () {
            var pass=$('#f_pwd').val();
            var rpass=$('#f_pwd2').val();
            if(pass!=rpass){
                var oSpan=$('<span id="s1">密码不一致</span>');
                $(this).after(oSpan);

            }
        });
    });
</script>

</html>