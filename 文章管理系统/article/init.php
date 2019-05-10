<?php
//用于声明或设置网页中的字符集的
header("content-type:text/html;charset=utf-8");
//(1)数据库配置信息
$db_host = "localhost";
$db_user = "root";
$db_pwd  = "root";
$db_name = "article"; //自定义数据库名称
//(2)连接MySQL服务器
$link = @mysql_connect($db_host,$db_user,$db_pwd);
if(!$link)
{
echo "<li>PHP连接MySQL服务器出错啦！</li>";
exit();
}
//(3)选择当前数据库
if(!mysql_select_db($db_name))
{
echo "<li>选择数据库<font color='red'>{$db_name}</font>失败！</li>";
exit();
}
//(4)设置MySQL返回数据的字符集
mysql_query("set names utf8");

?>