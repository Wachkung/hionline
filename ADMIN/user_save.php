<?php 

session_start();
	include("../config/connect.php"); 
	include("../config/config.php"); 
	include("../includes/config.inc.php"); 
	
	//$DEPART1=$_SESSION["DEPART"];
	if($_SESSION['ADMIN'] <> "1")
	{   
		echo "<meta charset='UTF-8'>";
		echo "ต้องเข้าสู่ระบบก่อนครับ!";
		echo"<meta http-equiv='refresh' content='2;URL=../index.php'>";
		exit();
	}
	
//รับค่ามาจากฟอร์ม

$Username=$_POST['Username'];
$Password=sha1(md5(md5(stripslashes('123456'))));
$Name=$_POST['Name'];
$ADMIN=$_POST['ADMIN'];
 if ($_POST['ADMIN'] == '') {$ADMIN='0';}
$SERVICE=$_POST['SERVICE'];
 if ($_POST['SERVICE'] == '') {$SERVICE='0';}
$REPORT=$_POST['REPORT'];
 if ($_POST['REPORT'] == '') {$REPORT='0';}

					
					$strSQL = "insert into  tabeluser set Username='$Username',Name='$Name',Password='$Password',SERVICE='$SERVICE',ADMIN='$ADMIN',REPORT='$REPORT'"	;
					//echo $strSQL;exit;
					$objQuery = mysql_query($strSQL);
					echo"<meta http-equiv='refresh' content='0;URL=user_add.php'>";
					mysql_close();					


?>
