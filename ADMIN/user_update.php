<?php 

session_start();
	include("../config/connect.php"); 
	include("../config/config.php"); 
	include("../includes/config.inc.php"); 
	
//	$DEPART1=$_SESSION["DEPART"];
	if($_SESSION['ADMIN'] <> "1")
	{   
		echo "<meta charset='UTF-8'>";
		echo "ต้องเข้าสู่ระบบก่อนครับ!";
		echo"<meta http-equiv='refresh' content='2;URL=../index.php'>";
		exit();
	}
	
//รับค่ามาจากฟอร์ม
$id=$_POST['id'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Name=$_POST['Name'];
$ADMIN=$_POST['ADMIN'];
 if ($_POST['ADMIN'] == '') {$ADMIN='0';}
$SERVICE=$_POST['SERVICE'];
 if ($_POST['SERVICE'] == '') {$SERVICE='0';}
$REPORT=$_POST['REPORT'];
 if ($_POST['REPORT'] == '') {$REPORT='0';}
					
					$strSQL = "update  tabeluser set Username='$Username',Name='$Name',Password='$Password',SERVICE='$SERVICE',ADMIN='$ADMIN',REPORT='$REPORT' where id='$id'	";
 
					$objQuery = mysql_query($strSQL);
					echo"<meta http-equiv='refresh' content='0;URL=user_edit.php?id=$id'>";
					mysql_close();					


?>
