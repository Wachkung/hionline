<?php
ob_start();
@session_start();

include("headder.php");

$user = $_POST["username"];
$pass=$_POST["passwrd"];

//$link =mysql_connect("localhost","root","pktat2");  
include("config/connect_mysql.php");
//mysql_select_db("summary");
mysql_query("SET NAME 'Tis620'");
mysql_query  ("SET character_set_results=tis620");
mysql_query  ("SET character_set_client = tis620");



$result = mysql_query("select * from user where username ='$user ' and password='$pass'");
$num_rows = mysql_num_rows($result);if(empty($num_rows))
{
echo  " user  หรือ password  ไม่ถูกต้อง ";
echo"<meta http-equiv='refresh' content='0;URL= index.php'>";
}
else
{
$_SESSION['user'] = $_POST["username"];
// $_SESSION['password'] = $pass;

echo"<meta http-equiv='refresh' content='0;URL=main.php'>";
//  echo  "ยินดีต้อนรับ:",$user ;
}


include("footer.php");







?>