<?php
ob_start();

@session_start();
if(!isset($_SESSION['user'])){

echo "<meta http-equiv=refresh content=0;URL=index.php>";

}else{

//echo "  ";


}
 include("headder3.php");

?>
<body>
<?php
include("../../config/connect.php");
mysql_query("SET NAME 'Tis620'");
mysql_query  ("SET character_set_results=tis620");
mysql_query  ("SET character_set_client = tis620");
$sql="SELECT
risk.NAME ,
SUM(CASE WHEN risk.RISKTYPE='C' THEN 1 ELSE 0 END) AS CLINIC,
SUM(CASE WHEN risk.RISKTYPE='N' THEN 1 ELSE 0 END) AS NONECLINIC,
SUM(CASE WHEN risk.RISKTYPE='F' THEN 1 ELSE 0 END) AS OTHER,
total.SUMMARY
FROM
(SELECT r.RISKTYPE, p.NAME FROM risk AS r, dprtm AS d, dprtmtype AS p WHERE r.EDPRTM=d.id AND d.DPRTM=p.DPRTM ) AS risk,
(SELECT p.NAME, COUNT(*) AS SUMMARY FROM risk AS r, dprtm AS d, dprtmtype AS p WHERE r.EDPRTM=d.id AND d.DPRTM=p.DPRTM GROUP BY p.NAME) AS total
WHERE 
risk.NAME=total.NAME
GROUP BY 
risk.NAME ";
										   
$result=mysql_query($sql);
                                        
?>

<table width="100%" border="0">
  <tr>
    <td><table width="92%" border="0" align="center">
        <tr> 
          <td colspan="5">&nbsp;</td>
        </tr>
        <tr bgcolor="#4BA7D3"> 
          <td colspan="5"><div align="center">รายงานความเสี่ยงตามกลุ่มงานแยกตามฝ่าย/กลุ่มงาน</div></td>
        </tr>
        <tr bgcolor="#D9D9FF"> 
          <td width="35%"><div align="center">ฝ่าย/กลุ่มงาน</div></td>
          <td width="16%"><div align="center">ด้านคลีนิค </div></td>
          <td width="17%"><div align="center">ด้านไม่ใช้คลีนิค</div></td>
          <td width="18%"><div align="center">ด้านอื่น</td>
          <td width="14%"><div align="center">รวม</div></td>
        </tr>
        <?                     while($arr=mysql_fetch_array($result)){                        ?>
        <tr bgcolor="#F3F3F3"> 
          <td><div align="center"><?php echo  $arr[NAME];  ?> </a><a  href="../../listgroup.php?&NAME=<?= $arr[NAME];?>" >ดูข้อมูล</a></div></td>
          <td><div align="center"><?php echo  $arr[CLINIC];  ?></div></td>
          <td><div align="center"><?php echo  $arr[NONECLINIC];  ?></div></td>
          <td><div align="center"><?php echo  $arr[OTHER];  ?></div></td>
          <td><div align="center"><?php echo  $arr[SUMMARY];  ?></div></td>
        </tr>
        <tr bgcolor="#D9D9FF">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td bgcolor="#D9D9FF">&nbsp;</td>
          <td bgcolor="#D9D9FF">&nbsp;</td>
      
	    </tr>
        <tr bgcolor="#4BA7D3"> 
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>

      </table></td>
  </tr>
</table>

<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
<?php
//header("content-type: application/x-javascript; charset=TIS-620");  
//We've included ../Includes/FusionCharts.php and ../Includes/DBConn.php, which contains
//functions to help us easily embed the charts and connect to a database.
include("../../config/FusionCharts.php");
include("../../config/DBConn.php");
?>
<HTML>
<HEAD>
	<TITLE>
	 
	</TITLE>
	<?php
	//You need to include the following JS file, if you intend to embed the chart using JavaScript.
	//Embedding using JavaScripts avoids the "Click to Activate..." issue in Internet Explorer
	//When you make your own charts, make sure that the path to this JS file is correct. Else, you would get JavaScript errors.
	?>	
	<SCRIPT LANGUAGE="Javascript" SRC="../FusionCharts/FusionCharts.js"></SCRIPT>
	<style type="text/css">
	<!--
	body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
	}
	.text{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
	}
	-->
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620"><BODY>
    <CENTER>
 
<?php
    //In this example, we show how to connect FusionCharts to a database.
    //For the sake of ease, we've used an MySQL databases containing two
    //tables.

    // Connect to the DB
    $link = connectToDB();

    //We also keep a flag to specify whether we've to animate the chart or not.
    //If the user is viewing the detailed chart and comes back to this page, he shouldn't
    //see the animation again.
    $animateChart = $_GET['animate'];
    //Set default value of 1
    if ($animateChart=="")
        $animateChart = "1";

    //$strXML will be used to store the entire XML document generated
    //Generate the chart element
    $strXML = "<chart caption='รายงานความเสี่ยง' subCaption='แยกตามฝ่าย/กลุ่มงาน' pieSliceDepth='30' showBorder='1' formatNumberScale='0' numberSuffix='ครั้ง' animation=' " . $animateChart . "'>";

// Fetch all factory records
//    $strQuery = "select * from Factory_Master";	
//   $result = mysql_query($strQuery) or die(mysql_error());
                mysql_query("SET NAME 'Tis620'");
	mysql_query  ("SET character_set_results=tis620");
                mysql_query  ("SET character_set_client = tis620");
		  
	$strQuery = "SELECT
	risk.NAME  AS NAME,
	SUM(CASE WHEN risk.RISKTYPE='C' THEN 1 ELSE 0 END) AS CLINIC,
	SUM(CASE WHEN risk.RISKTYPE='N' THEN 1 ELSE 0 END) AS NONECLINIC,
	SUM(CASE WHEN risk.RISKTYPE='F' THEN 1 ELSE 0 END) AS OTHER,
	total.SUMMARY AS SUMMARY
                FROM
	(SELECT r.RISKTYPE, p.NAME FROM risk AS r, dprtm AS d, dprtmtype AS p WHERE r.EDPRTM=d.id AND d.DPRTM=p.DPRTM ) AS risk,
	(SELECT p.NAME, COUNT(*) AS SUMMARY FROM risk AS r, dprtm AS d, dprtmtype AS p WHERE r.EDPRTM=d.id AND d.DPRTM=p.DPRTM GROUP BY p.NAME) AS total
                WHERE 
	risk.NAME=total.NAME
                GROUP BY 
	risk.NAME";
            $result2 = mysql_query($strQuery) or die(mysql_error()); 
    //Iterate through each factory
  if ($result2) {
        while($ors2 = mysql_fetch_array($result2)) {
            $strXML .= "<set label='" . $ors2['NAME'] . "' value='" . $ors2['SUMMARY'] . "' />";
        }
    }
    mysql_close($link);

    //Finally, close <chart> element
    $strXML .= "</chart>";

    //Create the chart - Pie 3D Chart with data from strXML
    echo renderChart("../FusionCharts/Column3D.swf", "", $strXML, "FactorySum", 600, 300, false, false);
?>
<BR><BR>
 
</CENTER>
</BODY>
</HTML></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
 



   <?php include("../../footer.php")    ?>