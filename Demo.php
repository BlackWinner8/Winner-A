<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
$sql="select * from admin where username='".$username."' && password='".$password."'";
$result=mysql_query($sql,$connec);
if($row=mysql_fetch_array($result)){
session_register("admin");
$admin=$username;
echo("<script type='text/javascript'> alert('登录成功！');location.href='admin.php';</script>");}
else
{
echo("<script type='text/javascript'> alert('你输入的用户名或密码错误，请重新输入！');location.href='login.php';</script& gt;");
}
mysql_close();
?>
