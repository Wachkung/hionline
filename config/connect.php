<?
$host = "localhost";
$use  = "root";
$pass = "212224236";
$db = "hionline";

$link = mysql_connect($host,$use,$pass);

if(!$link)
{
    echo"�������ö�Դ��Ͱҹ�����������Ѻ";
}
mysql_select_db($db);
mysql_query("SET NAMES TIS620");
mysql_query("SET character_set_results=tis620");
mysql_query("SET character_set_client=tis620");
mysql_query("SET character_set_connection=tis620");

?>