
<?
@session_start();

	if($_SESSION['SERVICE'] <> "1")
	{   
		echo "<meta charset='UTF-8'>";
		echo "ตรวจสอบสิทธิ์การใช้งานระบบกอน!";
		echo"<meta http-equiv='refresh' content='2;URL=menu.php'>";
		exit();
	}

if(!isset($_SESSION['Username'])){
die("PLEASE login"); 
}


?>

<style type="text/css">
    body{
        margin:0px auto;
        font-family: Arial,sans-serif;
        color: #333333;
        font-size:14px; 
        line-height: 1.166;	
        background-image: url(image/Background.png);

    }

    #contrainer {margin:2px auto; width:1100px; height:auto; overflow:hidden; border:#F00 0px solid; 	 -moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px; 
                 -moz-box-shadow: 0 0 0 1px #cccccc;
                 -webkit-box-shadow: 0 0 0 1px #cccccc;
                 box-shadow:0px 5px 5px 5px #cccccc;  }

</style>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="100%" height="100%" align="center">
            <div id="container">
                <div id="contrainer">
                    <?php include "header.php"; ?>
                    <?php include "getpage.php"; ?>
                    <?php // include "footer.php"; ?>
                </div>
            </div>
        </td>
    </tr>
</table>
</body>
</html>