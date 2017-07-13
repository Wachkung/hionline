<?php
@session_start();
include('config/connect_hisql.php');

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select username from admin where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
 
 echo"<meta http-equiv='refresh' content='0;URL= index.php'>";
}
?>