<?
$host = "localhost";
$use  = "root";
$pass = "212224236";
$db = "hi";

$link = mysql_connect($host,$use,$pass);
//echo$link;
if(!$link)
{
    echo"�������ö�Դ��Ͱҹ�����������Ѻ";
}
mysql_select_db($db);
mysql_query("SET NAMES TIS620");

?>