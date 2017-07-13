<?php
@session_start();
$_SESSION["pop_id"] = $_POST['pop_id'];
	if($_SESSION['SERVICE'] <> "1")
	{   
		echo "<meta charset='UTF-8'>";
		echo "ตรวจสอบสิทธิ์การใช้งานระบบกอน!";
		echo"<meta http-equiv='refresh' content='2;URL=../menu.php'>";
		exit();
	}

?>
<html>
    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-874">
            <title> ระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม</title>
            <link href="css/card.css" rel="stylesheet" type="text/css" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../includes/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../includes/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="../includes/bootstrap/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../includes/bootstrap/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="../includes/bootstrap/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../includes/bootstrap/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../includes/bootstrap/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../includes/bootstrap/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="../includes/bootstrap/css/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="../includes/bootstrap/css/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
            <script type="text/javascript"
                    src="http://code.jquery.com/jquery-latest.js">
            </script>

            <style type="text/css">
                body {
                    background-image: url(image/Background.png);
                }
            </style>

            <script type="text/javascript">

                $(document).ready(function () {

                    // calculate height
                    var screen_ht = $(window).height();
                    var preloader_ht = 5;
                    var padding = (screen_ht / 2) - preloader_ht;

                    $("#preloader").css("padding-top", padding + "px");

                });

                $(document).ready(function () {

           // loading animation using script

                    function anim() {
                        $("#preloader_image").animate({left: '-1400px'}, 5000,
                                function () {
                                    $("#preloader_image"), animate({left: '0px'}, 5000);
                                    if (rotate == 1) {
                                        anim();
                                    }
                                }
                        );
                    }

                    anim();

                });

            </script>

            <script type="text/javascript">

                rotate = 1;

                function hide_preloader() {
                    // To stop the preloader
                    rotate = 0;
                    // To apply Fade Out Effect to the Preloader
                    $("#preloader").fadeOut(1000);
                }

            </script>

            <style type="text/css">

                #preloader {
                    background: #000;
                    position:fixed;
                    left:0px;
                    top:0px;
                    width:100%;
                    height:100%;
                    text-align:center;
                    color:#fff;
                }
                #preloader div {
                    width:400px;
                    margin:auto;
                    height: 0px;
                    text-align:center;
                    border: 0px solid #111;
                    overflow:hidden;
                }
                #preloader_image {
                    position: relative;
                    left:0px;
                    top:-10px;
                }
                table, td, th
                {
                    margin: 10px auto;
                    border:0px dotted #5B7D9F;
                    border-collapse:collapse;
                    font-size:14px;
                }
                .bigtext { font-family:Tahoma, Geneva, sans-serif; font-size:18px; color:#900000;}
            </style>
    </head>

    <div id="preloader"> กำลังโหลดข้อมูล

        <div><img src="image/loading.gif" id="preloader_image" ></div>

    </div> <!-- #preloader -->
    <body onload="hide_preloader()"height="100%">
        <div id="headdercard">
            <form id="form1" name="form1" method="post" action="?page=show">
                <input type="hidden" name="do" value="query" />
                <table width="100%"height="100%"border="0" align="center" cellspacing="0" bordercolor="#FFFFFF">
                    <tr>
                        <td colspan="4" bgcolor="#ABDEA3"><div align="center" class="style1">ระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม</div> <div align="right"></td>
                    </tr>
                    <tr>
                        <td width="485"><div align="right"class="box-title"><strong>เลขบัตรประจำตัวประชาชน  :</strong></div></td>
                        <td colspan="2"><span class="style4">
                                <label>
                                    <input name="pop_id" type="text" id="pop_id" maxlength="13" />
                                </label>
                                <input class="btn btn-primary" name="cmdOK" type="submit" id="cmdOK" value="ค้นหา" />
                            </span></td>
                        <td width="182">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                        <td width="182">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" bgcolor="#FFE1E1"><div align="left">
                                </tr>
                                </table>

                            </div>

                            <div align="center">

                                <?php
                                $pop_id = $_POST['pop_id'];

                                if (isset($_POST['do']) and $_POST['do'] == 'query') {
                                    if (empty($pop_id)) {
                                        echo "<font color= color=#0000CC  size=+3 > กรุณา....กรอกเลข 13หลัก ที่ต้องการค้นหา ค่ะ  </font>";
                                    } else if (strlen($pop_id) >= 1 AND strlen($pop_id) <= 12) {
                                        echo "<font color=#0000CC size=+3 > กรอกไม่ครบ 13 ตัวอักษร หรือกรอกไม่ถูกต้องค่ะ</font>";
                                    } else {
 
 												//SERVER LOG
												$namedb=$_SESSION["Username"];
												$pop_id=$_SESSION["pop_id"];
												include("../config/connect.php");
												$log_datetime = date("Y-m-d H:i:s");
												$log_action = "มีผู้ใช้ ".$_SESSION["Username"]." ได้เข้ามาใช้งานประวัติ ".$pop_id." ในระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม เมื่อ";
												//$log_ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
												/*if (getenv(HTTP_X_FORWARDED_FOR)) 
													$log_ipaddress=getenv(HTTP_X_FORWARDED_FOR); 
													else 	$log_ipaddress=getenv(REMOTE_ADDR); 
												*/
												     if ($_SERVER['HTTP_CLIENT_IP'])
														 $log_ipaddress = $_SERVER['HTTP_CLIENT_IP'];
													 else if($_SERVER['HTTP_X_FORWARDED_FOR'])
														 $log_ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
													 else if($_SERVER['HTTP_X_FORWARDED'])
														 $log_ipaddress = $_SERVER['HTTP_X_FORWARDED'];
													 else if($_SERVER['HTTP_FORWARDED_FOR'])
														 $log_ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
													 else if($_SERVER['HTTP_FORWARDED'])
														 $log_ipaddress = $_SERVER['HTTP_FORWARDED'];
													 else if($_SERVER['REMOTE_ADDR'])
														 $log_ipaddress = $_SERVER['REMOTE_ADDR'];

												
												$strSQLlog = "insert into hionline.log set log.log_admin='".$_SESSION["Username"]."', log.log_cid='".$_POST['pop_id']."',log.log_menu='ประวัติการรักษา', log.log_action='$log_action', log.log_datetime='$log_datetime', log.log_ipaddress='$log_ipaddress'";
												$objQuerylog = mysql_query($strSQLlog);
												//echo $strSQLlog ;
												//END LOG
                                         include("../config/dateThai.php");
                                         include("../config/connect_hi.php");


                                        $yy = substr(date('Y') + 543, 2, 2);
                                        $pyy = $yy - 1;

                                        $sql = "SELECT pt.hn,pt.fname,pt.lname,pt.pop_id,pt.pttype,pttype.namepttype,insure.hospmain,hospcode.namehosp
												FROM hi.pt
												Inner Join hi.pttype ON pt.pttype = pttype.pttype
												INNER JOIN hi.insure on pt.hn = insure.hn
												INNER JOIN hi.hospcode on insure.hospmain = hospcode.off_id
												WHERE pt.pop_id = '$pop_id'and pt.pttype=insure.pttype limit 1";

                                        $rsPT = mysql_db_query($db, $sql) or die("SQL เชื่อมต่อไม่ได้");
                                        echo"<table width='80%' border='0' cellspacing='0' cellpadding='0'class='table table-bordered table-hover'>";
                                        echo"<tr bgcolor=#ABDEA3>";
                                        echo"<td align = center> HN </td>";
                                        echo"<td align = center> ชื่อ - สกุล</td>";
                                        echo"<td align = center> เลขบัตรประชาชน</td>";
                                        echo"<td align = center>สิทธิการรักษา</td>";
                                        echo"<td align = center>สถานบริการสิทธิ</td>";
                                        echo"</tr>";
                                        while ($show = mysql_fetch_array($rsPT)) {

                                            $hn = $show['hn'];
                                            $fname = $show['fname'];
                                            $lname = $show['lname'];
                                            $pop_id = $show['pop_id'];
                                            $pttype = $show['pttype'];
                                            $namepttype = $show['namepttype'];
                                            $hospmain = $show['hospmain'];
                                            $namehosp = $show['namehosp'];
                                            echo"<tr>";
                                            echo"<td align = center class='bigtext'> $hn </td>";
                                            echo"<td align = center class='bigtext'> $fname  $lname</td>";
                                            echo"<td align = center class='bigtext'> $pop_id </td>";
                                            echo"<td align = center class='bigtext'> $namepttype </td>";
                                            echo"<td align = center class='bigtext'> $namehosp </td>";
                                            echo"</tr>";
                                            echo"</table>";
                                        }
                                        ?>
                                    </div>
                                    <div id="lefttable" style="width: 230px; height: 650px; overflow: auto;">

                                        <?php
                                        if (!$rsPT) {
                                            echo"Not Datebase";
                                        } else {

                                            list($syear) = explode("/", date('Y'));
                                            list($syear1) = explode("/", date('Y'));

                                            $syear -=2;
                                            $YYR = $syear;
                                            $YYR1 = $syear1;
                                            $DSTR = '1/1/' . $YYR;
                                            $DSTR1 = $YYR . '-01-01';
                                            $DSTP = '12/31/' . date(Y);
                                            $DSTR2 = $YYR1 . '-12-31';
                                            $ccc = date("Y") - 2;
                                            $ddd = date(Y);
                                            $eee = date("Y") - 2;
                                            $fff = date(Y);
                                            $sqlYY = "SELECT
														ovst.hn,
														ovst.vn,
														ovst.vstdttm,
														ovstdx.icd10,
														ovstdx.icd10name,
														icd101.icd10name,
														icd101.name_t
														FROM
														hi.ovst Inner Join pt ON pt.hn = ovst.hn
														INNER JOIN hi.ovstdx ON ovst.vn = ovstdx.vn
														INNER JOIN hi.icd101 ON ovstdx.icd10 = icd101.icd10
														where pt.pop_id = '$pop_id' GROUP BY ovst.vn  order by  ovst.vstdttm  desc ";

                                            $rsOVSTYY = mysql_db_query($db, $sqlYY) or die(" SQL เชื่อมต่อไม่ได้");
                                            echo" <table width='100%' border='1' align='center'class='table table-bordered table-hover'>";
                                            echo"<tr>";
                                            echo"<td width='190' align = center>วันที่มารับบริการ </td>";
                                            echo"</tr>";
                                            while ($showOVSTYY = mysql_fetch_array($rsOVSTYY)) {
                                                $i++;
                                                if ($i % 2 == 0) {
                                                    $bg = "#F3F3F3";
                                                } else {
                                                    $bg = "#FFFFFF";
                                                }
                                                $vn = $showOVSTYY['vn'];
                                                $vstdttm = $showOVSTYY['vstdttm'];
                                                $icd10 = $showOVSTYY['icd10'];
                                                $icd10name = $showOVSTYY['name_t'];
                                                $pop_id = $showOVSTYY['POP_ID'];
                                                echo"<tr bgcolor='$bg'>";
                                                echo"<td  align = center><a href='show_pt.php?vn=$vn&vstdttm=$vstdttm' target='showpt' ini_get('session.upload_progress.prefix') . 'myForm'>$vstdttm $icd10</a></td>";
                                                echo"</tr>";
                                            }
                                            echo"</table>";
                                            odbc_close_all();
                                        }
                                    }
                                }

                                ?>
                            </div>
                            <div id="righttable"style="width: 830px; height: 650px;">
                                <div align="center"><font color="#000066"  size=+2 > <u>ประวัติการรักษา</U></font>  </div>

                                <iframe src="" name="showpt" width="100%" height="600"  frameborder="0">   </iframe>
                            </div>

                            </form>
<?php include "footer.php";  ?>

                            </html>