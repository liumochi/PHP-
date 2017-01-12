<?php  

//lalalalala_12345@126.com   laoshan12345
//laoshan_345_123@126.com    

require_once('email.class.php');  
//##########################################  
$smtpserver = "smtp.126.com";//SMTP服务器  
$smtpserverport = 25;//SMTP服务器端口  
$smtpusermail = "lalalalala_12345@126.com";//SMTP服务器的用户邮箱  
$smtpemailto = "laoshan_345_123@126.com";//发送给谁  
$smtpuser = "lalalalala_12345@126.com";//SMTP服务器的用户帐号  
$smtppass = "laoshan12345";//SMTP服务器的用户密码  
$mailsubject = "PHP测试邮件系统";//邮件主题  
$mailbody = "<h1> 这是一个测试程序</h1>";//邮件内容  
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件  
##########################################  
$smtp = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.  
$smtp->debug = true;//是否显示发送的调试信息  
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);  
?>  