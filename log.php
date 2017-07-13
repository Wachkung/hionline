<?


include("config/connect.php");

$userid = $_POST['userid'];
$psw = sha1(md5(md5(stripslashes($_POST['psw'])))); 
$op = $_GET['op'];
//$ddd="password ??????????";
if($op=="in"){
//$cek = mysql_query("SELECT * FROM tabeluser WHERE Username='$userid' AND Password='$psw'");

	$strSQL = "SELECT * FROM tabeluser WHERE Username='$userid' AND Password='$psw'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
			echo"<meta http-equiv='refresh' content='1;URL=index.php'>";
	}
	else
	{		$_SESSION['Username'] = $objResult['Username'];
			$_SESSION["ADMIN"] = $objResult["ADMIN"];
			$_SESSION["SERVICE"] = $objResult["SERVICE"];
			$_SESSION["REPORT"] = $objResult["REPORT"];

			session_write_close();
			
			//if($objResult[$program_folder] == "0")
			//{
				
			//	header("location:$program_folder/index.php");
			//}
			//else
			//{
				header("location:menu.php");
			//}
	}

}else if($op=="out"){
unset($_SESSION['Username']);
unset($_SESSION['SERVICE']);
unset($_SESSION['REPORT']);
unset($_SESSION['ADMIN']);
header("location:index.php");

} 

?>