<?php 

session_start();
	include("../config/connect.php"); 
	include("../config/config.php"); 
	include("../includes/config.inc.php"); 
	
//	$DEPART1=$_SESSION["DEPART"];
	if($_SESSION['ADMIN'] <> "1")
	{   
		echo "<meta charset='UTF-8'>";
		echo "��ͧ�������к���͹��Ѻ!";
		echo"<meta http-equiv='refresh' content='2;URL=../index.php'>";
		exit();
	}
	
//�Ѻ����Ҩҡ�����
$id=$_GET['id'];



$strSQL = "delete from  tabeluser  where id='$id'";
$objQuery = mysql_query($strSQL);
	

echo"<meta http-equiv='refresh' content='0;URL=index.php'>";
mysql_close();


?>
