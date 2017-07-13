  <?
 ob_start();

@session_start();
if(!isset($_SESSION['user'])){

echo "<meta http-equiv=refresh content=0;URL=index.php>";

}else{

//echo "  ";


}
 
 
  
    include("headder3.php");   ?>
   
   <table width="100%" border="0">
  <tr>
    <td  align="center">   </td> 
  </tr>
   <tr>
    <td  align="center">  กราฟแสดงรายงานความเสี่ยงแยกตามงาน</td>
  </tr
  ><tr>
    <td>
<? 


 
//header("content-type: application/x-javascript; charset=TIS-620");  
//We've included ../Includes/FusionCharts.php and ../Includes/DBConn.php, which contains
//functions to help us easily embed the charts and connect to a database.
include("../../config/FusionCharts.php");
include("../../config/DBConn.php");
?>
<HTML>
<HEAD>
	<TITLE>
	   กราฟแสดงรายงานความเสี่ยงแยกตามงาน
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
    
<p>&nbsp;</p>
<p>&nbsp;</p>
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
	risk.NAME  AS NAME ,
	SUM(CASE WHEN risk.RISKTYPE='C' THEN 1 ELSE 0 END) AS CLINIC,
	SUM(CASE WHEN risk.RISKTYPE='N' THEN 1 ELSE 0 END) AS NONECLINIC,
	SUM(CASE WHEN risk.RISKTYPE='F' THEN 1 ELSE 0 END) AS OTHER,
	total.SUMMARY  AS SUMMARY
FROM
	(SELECT r.RISKTYPE, d.NAME FROM risk AS r, dprtm AS d  WHERE r.EDPRTM=d.id  ) AS risk,
	(SELECT d.NAME, COUNT(*) AS SUMMARY FROM risk AS r, dprtm AS d   WHERE r.EDPRTM=d.id  GROUP BY d.NAME) AS total
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
    echo renderChart("../FusionCharts/Pie3D.swf", "", $strXML, "FactorySum", 800, 300, false, false);
?>
<BR><BR>
 
</CENTER>
</BODY>
</HTML></td>
  </tr>
</table>
 
</body>
</html>
 </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>




   <? include("../../footer.php")    ?>