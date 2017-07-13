<?   
ob_start();

@session_start();
if(!isset($_SESSION['user'])){

echo "<meta http-equiv=refresh content=0;URL=index.php>";

}else{

//echo "  ";


}
 
 include("headder3.php");
 ?>
<html>
<head>
<title>รายงานระบบรายงานความเสี่ยง</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<link type="text/css" href="../../js/jquery-ui-1.8.10.custom.css" rel="stylesheet" />	
	 
		<script type="text/javascript" src="../../js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>
		<script type="text/javascript">
		  $(function () {
		    var d = new Date();
		//    ปรับวัน /วัน/เดือน/ปี
          var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear() + 543);
          //       var toDay = (d.getFullYear() +543)+ '-' + (d.getMonth() + 1)+ '-' + d.getDate() ;
	  
	    //    var toDay = (d.getFullYear() + 543)+ '- + (d.getMonth() + 1)+ '-' + d.getDate()   ;

		    // กรณีต้องการใส่ปฏิทินลงไปมากกว่า 1 อันต่อหน้า ก็ให้มาเพิ่ม Code ที่บรรทัดด้านล่างด้วยครับ (1 ชุด = 1 ปฏิทิน)

		    $("#datepicker-1").datepicker({ dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});

		    $("#datepicker-2").datepicker({ dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});

     		    //$("#datepicker-en").datepicker({ dateFormat: 'dd/mm/yy'});

		    //$("#inline").datepicker({ dateFormat: 'dd/mm/yy', inline: true });


			});
			
	</script>
</head>

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
<p> 
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

						 list( $sday, $smonth,$syear) = explode("/", $_POST["EVENTDATE1"]);
                      list( $bday, $bmonth,$byear) = explode("/", $_POST["EVENTDATE2"]);
		          $syear -=543;
	     		$byear -=543;
	                         	$EVENTDATE1 = $syear . '-' . $smonth . '-' . $sday;
						    	$EVENTDATE2 = $byear . '-' . $bmonth . '-' . $bday;	  
						
					//	    include("../../config/connect.php");
                                                     mysql_query("SET character_set_results=tis620");
                                                        mysql_query("SET character_set_client=tis620");
                                                         mysql_query("SET character_set_connection=tis620");

  
  if(($EVENTDATE1!='-543--')&&($EVENTDATE2!=='-543--') ) { 
  
  $strQuery="
SELECT risk.risk9p AS aaa , risk9p.NAME AS bbb ,Count( risk.risk9p ) AS ccc
FROM risk   INNER JOIN risk9p ON risk9p.ID = risk.risk9p  
where eventdate BETWEEN '$EVENTDATE1' AND '$EVENTDATE2 ' 

GROUP BY risk.risk9p  ORDER BY risk.risk9p" ; 
  
  	$sql1="SELECT riskcause.ID AS ddd, riskcause.NAME AS eee, Count(risk.riskcause) AS  fff
FROM risk INNER JOIN riskcause ON risk.riskcause = riskcause.ID
where eventdate BETWEEN '$EVENTDATE1' AND '$EVENTDATE2 ' 
GROUP BY riskcause.ID, riskcause.NAME
ORDER BY riskcause.ID";
   
   $sql2="SELECT risk.risklevel AS ggg, risklevel.NAME AS hhh, Count(risk.risklevel) AS iii
FROM risk INNER JOIN risklevel ON risk.risklevel = risklevel.ID
where eventdate BETWEEN '$EVENTDATE1' AND '$EVENTDATE2 ' 
GROUP BY risk.risklevel, risklevel.NAME
ORDER BY risk.risklevel";

  
 $sql3=" SELECT risktype.CODE as codetype , risktype.NAME nametype, Count( risk.risktype ) AS counttype
FROM risk
INNER JOIN risktype ON risk.risktype = risktype.CODE
where eventdate BETWEEN '$EVENTDATE1' AND '$EVENTDATE2 ' 
GROUP BY risktype.CODE, risktype.NAME
ORDER BY risktype.CODE";

 }else{
 
   $strQuery="
SELECT risk.risk9p AS aaa , risk9p.NAME AS bbb ,Count( risk.risk9p ) AS ccc
FROM risk   INNER JOIN risk9p ON risk9p.ID = risk.risk9p  
GROUP BY risk.risk9p  ORDER BY risk.risk9p" ; 
 	$sql1="SELECT riskcause.ID AS ddd, riskcause.NAME AS eee, Count(risk.riskcause) AS  fff
FROM risk INNER JOIN riskcause ON risk.riskcause = riskcause.ID
GROUP BY riskcause.ID, riskcause.NAME
ORDER BY riskcause.ID";
   
   $sql2="SELECT risk.risklevel AS ggg, risklevel.NAME AS hhh, Count(risk.risklevel) AS iii
FROM risk INNER JOIN risklevel ON risk.risklevel = risklevel.ID
GROUP BY risk.risklevel, risklevel.NAME
ORDER BY risk.risklevel";

  
 $sql3=" SELECT risktype.CODE as codetype , risktype.NAME nametype, Count( risk.risktype ) AS counttype
FROM risk
INNER JOIN risktype ON risk.risktype = risktype.CODE
 GROUP BY risktype.CODE, risktype.NAME
ORDER BY risktype.CODE";
}
 
 
     $result = mysql_query($strQuery) or die(mysql_error()); 
	 //  $result=mysql_query($sql);
				            /*       $result1=mysql_query($sql1);
                                 $result2=mysql_query($sql2);
				                   $result3=mysql_query($sql3); */
    //Iterate through each factory
  if ($result) {
        while($ors2 = mysql_fetch_array($result)) {
            $strXML .= "<set label='" . $ors2['aaa'] . "' value='" . $ors2['ccc'] . "' />";
        }
    }
    mysql_close($link);

    //Finally, close <chart> element
    $strXML .= "</chart>";

 
 
                                
		 ?>			
					
					  <body bgcolor="#EAEAEA">
  </p>
<form name="form1"  method="post" action="">

  <div align="center">
    <table width="100%" border="0">
      <tr>
        <td bgcolor="#2E8FBE"><div align="center"><font color="#FFFFFF">ค้นหาจากวันที่ 
            </font> 
            <input type="text" name="EVENTDATE1"id="datepicker-1">
            <font color="#FFFFFF">ถึงวันที่ 
            <input type="text" name="EVENTDATE2"id="datepicker-2">
            </font> 
            <input type="submit" name="Submit" value="Submit">
          </div></td>
      </tr>
    </table>
    
    <table width="100%" height="516" border="1">
      <tr> 
        <td width="50%"><font color="#FFFFFF"><? echo renderChart("../FusionCharts/Pie3D.swf", "", $strXML, "FactorySum", 400, 150, false, false); ?></font> 
        </td>
        <td width="5%" rowspan="2">&nbsp;</td>
        <td width="45%" colspan="5"><table width="100%" border="1">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
      <tr> 
        <td><table width="100%" border="1">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        <td colspan="5"><table width="100%" border="1">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
  </form>

</body>
</html>
 
   <?// include("footer.php")    ?>