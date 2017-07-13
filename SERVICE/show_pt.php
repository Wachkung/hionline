<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv=Content-Type content="text/html; charset=tis-620">
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

            </style>
    </head>












    <div id="preloader"> กำลังโหลดข้อมูล 

        <div><img src="image/loading.gif" id="preloader_image" ></div>

    </div> <!-- #preloader -->
    <body onload="hide_preloader()">
        <?php
 			

        $_GET['vn'];
        $vn1 = $_GET['vn'];
        echo "VN: " . $vn1 . "<br/>";
        $_GET['vstdttm'];
        $vstdttm1 = $_GET['vstdttm'];
        echo "วันที่ " . $vstdttm1 . "<br/>";
        //$_GET['vsttime'];
        //$vsttime1=$_GET['vsttime'];
        // echo  "เวลา" . $vsttime1."<br/>";  ;



        $dateparse = date_parse($vstdate1);
        $month = $dateparse ["month"];
        $day = $dateparse ["day"];
        $year = $dateparse ["year"];

        list($syear) = explode("/", date('Y'));
        list($syear1) = explode("/", date('Y'));
        $syear -=1;
        $YYR = $syear;
        $YYR1 = $syear1;
        $DSTR = '1/1/' . $YYR;

        $DSTR1 = $YYR . '-01-01';

        $DSTP = '12/31/' . date(Y);
        $DSTR2 = $YYR1 . '-12-31';


        include("../config/connect_hi.php");
        // include ("config/odbc_num_rowsrx.php");
        // include ("config/odbc_num_rowscc.php");



        $sql4 = "SELECT ovst.bw, ovst.height, ovst.bmi,ovst.tt, ovst.pr, ovst.sbp, ovst.rr, ovst.dbp	FROM  ovst WHERE vn = $vn1 ";

        echo "<U > สัญญานชีพ </u>" . "<br/>";

        $rs4 = mysql_db_query($db, $sql4);
        $result = mysql_fetch_array($rs4);
        $bw = $result[bw];
        $height = $result[height];
        $bmi = $result[bmi];
        $tt = $result[tt];
        $pr = $result[pr];
        $sbp = $result[sbp];
        $rr = $result[rr];
        $dbp = $result[dbp];
        ?>
        <table width="91%" border="1" align="center" class='table table-bordered table-hover'>
            <tr> 
                <td width="20%" bgcolor="#ABDEA3"> 
                    <div align="center">
                        BW
                    </div></td>
                <td width="20%" bgcolor="#ABDEA3"> 
                    <div align="center"> 
                        HEIGHT
                    </div></td>
                <td width="20%" bgcolor="#ABDEA3"> 
                    BMI</td>
                <td width="20%" bgcolor="#ABDEA3"> 
                    TT</td>
                <td width="20%" bgcolor="#ABDEA3"> 
                    PR</td>
                <td width="20%" bgcolor="#ABDEA3"> 
                    SBP</td>
                <td width="20%" bgcolor="#ABDEA3"> 
                    RR</td>
                <td width="20%" bgcolor="#ABDEA3"> 
                    DBP</td>
            </tr>
            <tr> 
                <td width="20%"> 
                    <div align="center">
<?php echo"$bw"; ?>
                    </div></td>
                <td width="20%"> 
                    <div align="center"> 
<?php echo"$height"; ?>
                    </div></td>
                <td width="20%"> 
                    <?php echo"$bmi"; ?></td>
                <td width="20%"> 
                    <?php echo"$tt"; ?></td>
                <td width="20%"> 
                    <?php echo"$pr"; ?></td>
                <td width="20%"> 
                    <?php echo"$sbp"; ?></td>
                <td width="20%"> 
                    <?php echo"$rr"; ?></td>
                <td width="20%"> 
                    <?php echo"$dbp"; ?></td>
            </tr>
        </table>
<?php
$sql6 = "select symptom FROM symptm WHERE vn = $vn1 ";
echo"<br/>" . "<U >อาการสำคัญที่มาโรงพยาบาล </u>" . "<br/>";
$rs6 = mysql_db_query($db, $sql6);
$numsymptom = mysql_num_rows;
if ($numsymptom($rs6) != 0) {

    $fields = mysql_num_fields($rs6);
    for ($i = 1; $i <= $fields; $i++) {
        //echo  mysql_result($rs6,$i); 

        $result = mysql_fetch_array($rs6);
        $symptom = $result[symptom];
        ?>
                <table width="91%" border="1" align="center" class='table table-bordered table-hover'>
                    <tr> 
                        <td width="20%" bgcolor="#ABDEA3"> 
                            <div align="center">
                                Chief Complaint
                            </div></td>
                    </tr>
                    <tr> 
                        <td width="20%"> 
                            <div align="center">
        <?php echo"$symptom"; ?>
                            </div></td>
                    </tr>
                </table>

        <?php
    }
}

$sqlpillness = "SELECT pillness.pillness FROM pillness WHERE vn = $vn1 ";
$rspillness = mysql_db_query($db, $sqlpillness);
$numpillness = mysql_num_rows;
if ($numpillness($rspillness) != 0) {

    $fieldspillness = mysql_num_fields($rspillness);
    for ($i = 1; $i <= $fieldspillness; $i++) {
        //echo  mysql_result($rs6,$i); 

        $resultpillness = mysql_fetch_array($rspillness);
        $pillness = $resultpillness[pillness];
        ?>
                <table width="91%" border="1" align="center"class='table table-bordered table-hover'>
                    <tr> 
                        <td width="20%" bgcolor="#ABDEA3"> 
                            <div align="center">
                                Present Illness
                            </div></td>
                    </tr>
                    <tr> 
                        <td width="20%"> 
                            <div align="center">
        <?php echo"$pillness"; ?>
                            </div></td>
                    </tr>
                </table>

        <?php
    }
} else {
    echo "<font color= color=#0000CC  size=+1 >ไม่มีข้อมูลอาการสำคัญที่มาโรงพยาบาล </font>" . "<br/>";
}

$sql3 = "SELECT sign FROM sign  WHERE vn = $vn1";

$result1 = mysql_db_query($db, $sql3);
echo "<br/>" . "<U > การตรวจร่างกาย</u>" . "<br/>";
$numrowcc = mysql_num_rows;
if ($numrowcc($result1) != 0) {
    //echo  "ok";
    //mysql_result_all($result1);   
    ?>
            <table width="91%" border="1" align="center"class='table table-bordered table-hover'>
                <tr> 
                    <td width="20%" bgcolor="#ABDEA3"> 
                        <div align="center">
                            Sign
                        </div></td>
                </tr>
    <?php
    while ($result = mysql_fetch_array($result1)) {
        $sign = $result[sign];
        ?>


                    <tr> 
                        <td width="20%"> 
                            <div align="center">
        <?php echo"$sign"; ?>
                            </div></td>
                    </tr>
                    <? }?>
                </table>
        <?php
    } else {
            echo "<font color= color=#0000CC  size=+1 >ไม่มีผลการตรวจร่างกาย</font>" . "<br/>";
        }
       echo "<br/>" . "<U >การวินิฉัยโรค</u>" . "<br/>";
    $sql2 = "SELECT  ovstdx.ICD10,   icd101.icd10name    FROM  ovstdx Inner Join icd101 ON icd101.ICD10 = ovstdx.ICD10 WHERE vn = $vn1";

    $rs2 = mysql_db_query($db, $sql2);
    //mysql_result_all($rs2);	
    //$result = mysql_fetch_array($rs2);
    //$ICD10=$result[ICD10];
    //$icd10name=$result[icd10name];
    ?>
            <table width="91%" border="1" align="center"class='table table-bordered table-hover'>
                <tr> 
                    <td width="20%" bgcolor="#ABDEA3"> 
                        <div align="center">
                            ICD10
                        </div></td>
                    <td width="20%" bgcolor="#ABDEA3"> 
                        <div align="center"> 
                            icd10name
                        </div></td>
                </tr>

    <?php
    while ($result = mysql_fetch_array($rs2)) {
        $ICD10 = $result[ICD10];
        $icd10name = $result[icd10name];
        ?>

                    <tr> 
                        <td width="30%"> 
                            <div align="center">
        <?php echo"$ICD10"; ?>
                            </div></td>
                        <td width="70%"> 
                            <div align="center"> 
                                <?php echo"$icd10name"; ?>
                            </div></td>
                    </tr>
                    <?													  
                    } 

                    ?>

                </table>


        <?php
        echo "<br/>" . "<U >การทำหัตถการ</u>" . "<br/>";
        $sqloprt = "SELECT  oprt.icd9cm, oprt.icd9name FROM  oprt  WHERE vn = $vn1";

        $rsoprt = mysql_db_query($db, $sqloprt);
        //mysql_result_all($rs2);	
        //$result = mysql_fetch_array($rs2);
        //$ICD10=$result[ICD10];
        //$icd10name=$result[icd10name];
        ?>
                <table width="91%" border="1" align="center"class='table table-bordered table-hover'>
                    <tr> 
                        <td width="30%" bgcolor="#ABDEA3"> 
                            <div align="center">
                                ICD9
                            </div></td>
                        <td width="70%" bgcolor="#ABDEA3"> 
                            <div align="center"> 
                                icd9name
                            </div></td>
                    </tr>

        <?php
        while ($resultoprt = mysql_fetch_array($rsoprt)) {
            $icd9cm = $resultoprt[icd9cm];
            $icd9name = $resultoprt[icd9name];
            ?>

                        <tr> 
                            <td width="20%"> 
                                <div align="center">
                        <?php echo"$icd9cm"; ?>
                                </div></td>
                            <td width="20%"> 
                                <div align="center"> 
                                    <?php echo"$icd9name"; ?></div></td>
                        </tr>
                        <?													  
                        } 

                        ?>

                    </table>

                    <?php
                    echo "<br/>"."<U >การรักษา </u>"."<br/>";   
                    $sql5="SELECT prscdt.nameprscdt, prscdt.medusage,prscdt.qty FROM   prsc  Left Join prscdt ON prscdt.PRSCNO = prsc.PRSCNO WHERE vn = $vn1"; 			
                    $rs = mysql_db_query($db,$sql5);
                    $numrowrx=mysql_num_rows;
                    if($numrowrx($rs)!=0){
                    //mysql_result_all($rs);	
                    //$result = mysql_fetch_array($rs);
                    //$nameprscdt=$result[nameprscdt];
                    //$medusage=$result[medusage];
                    //$qty=$result[qty];
                    ?>
                    <table width="91%" border="1" align="center"class='table table-bordered table-hover'>
                        <tr> 
                            <td width="70%" bgcolor="#ABDEA3"> 
                                <div align="center">
                                    nameprscdt
                                </div></td>
                            <td width="20%" bgcolor="#ABDEA3"> 
                                <div align="center"> 
                                    medusage</div></td>
                            <td width="10%" bgcolor="#ABDEA3"> 
                                <div align="center"> 
                                    qty</div></td>
                        </tr>
            <?php
            while ($result = mysql_fetch_array($rs)) {
                $nameprscdt = $result[nameprscdt];
                $medusage = $result[medusage];
                $qty = $result[qty];
                ?>

                            <tr> 
                                <td width="20%"> 
                                    <div align="center">
                            <?php echo"$nameprscdt"; ?>
                                    </div></td>
                                <td width="20%"> 
                                    <div align="center"> 
                                        <?php echo"$medusage"; ?></div></td>
                                <td width="20%"> 
                                    <div align="center"> 
                <?php echo"$qty"; ?></div></td>
                            </tr>
                            <?													  
                            } 

                            ?>
                        </table>
                <?php
            } else {
                echo "<font color= color=#0000CC  size=+1 >ไม่มีข้อมูลการรักษา </font>" . "<br/>";
            }




// LAB เดี่ยว
            echo "<br/>" . "<U >ผลการตรวจ LAB  </u>" . "<br/>";


            $sql11 = "SELECT dbf FROM hi.lab  INNER JOIN hi.lbbk ON lbbk.labcode = lab.labcode  WHERE vn = $vn1 ";
            $sql111 = mysql_db_query($db, $sql11);

            while ($nub = mysql_fetch_array($sql111)) {

                $xxx = strtolower($nub["dbf"]);
                echo "<font size = 4 color = blue><h4> $xxx  </h4></font><br>\n";
                $shwlab = "select " . $xxx . ".* from  hi." . $xxx . "   INNER JOIN hi.lbbk on " . $xxx . ".ln = lbbk.ln WHERE lbbk.vn = $vn1";

                $rslab = mysql_db_query($db, $shwlab);
                $fields = mysql_num_fields($rslab);
                $result = mysql_fetch_array($rslab);
                ?>
                        <table width="80%" border="1" align="center"class='table table-bordered table-hover'>
                        <?php
                        for ($i = 1; $i <= $fields - 1; $i++) {
                            ?>																					
                                <tr> 
                                    <td bgcolor="#ABDEA3"> 
                                <?php
                                echo mysql_field_name($rslab, $i);
                                ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $result[mysql_field_name($rslab, $i)];
                                        ?>
                                    </td>
                                </tr>
                                        <?php
                                    }
                                    ?>
                        </table>
                        <?
                        //																		echo $row;  
                        }

                        ?>


                        <?//LAB ชุด

                        $sql11s="SELECT dbfs FROM hi.lab  INNER JOIN hi.lbbk ON lbbk.labcode = lab.labcode  WHERE vn = $vn1 ";
                        $sql111s = mysql_db_query($db,$sql11s);	   	 

                        while ($nubs=mysql_fetch_array($sql111s)){

                        $getA = strtolower( $nubs["dbfs"] );
                        $xxxs = 	explode(",",$getA);


                        for($x=0;$x<count($xxxs);$x++){


                        echo "<font size = 4 color = blue><h4> $xxxs[$x] </h4></font><br>\n";	
                        $shwlabs = "select ".$xxxs[$x].".* from  hi.".$xxxs[$x]."   INNER JOIN hi.lbbk on ".$xxxs[$x].".ln = lbbk.ln WHERE lbbk.vn = $vn1";

                        $rslabs = mysql_db_query($db,$shwlabs);
                        $fieldss = mysql_num_fields($rslabs);	
                        $results = mysql_fetch_array($rslabs);
                        ?>
                        <table width="80%" border="1" align="center"class='table table-bordered table-hover'>
                <?php
                for ($i = 1; $i <= $fieldss - 1; $i++) {
                    ?>																					
                                <tr> 
                                    <td bgcolor="#ABDEA3"> 
                                <?php
                                echo mysql_field_name($rslabs, $i);
                                ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $results[mysql_field_name($rslabs, $i)];
                                        ?>
                                    </td>
                                </tr>
                                        <?php
                                    }
                                    ?>
                        </table>
                        <?
                        //																		echo $row;  
                        }




                        }

                        ?>

                <?php
                echo "<br/>" . "<U >สถานะการรักษา</u>" . "<br/>";
                $sqlovst = "SELECT  ovst.ovstost , ovstost.nameovstos FROM  ovst INNER JOIN ovstost ON ovstost.ovstost=ovst.ovstost  WHERE vn = $vn1";

                $rsovst = mysql_db_query($db, $sqlovst);
                //mysql_result_all($rs2);	
                //$result = mysql_fetch_array($rs2);
                //$ICD10=$result[ICD10];
                //$icd10name=$result[icd10name];
                ?>
                        <table width="91%" border="1" align="center"class='table table-bordered table-hover'>
                            <tr> 
                                <td width="20%" bgcolor="#ABDEA3"> 
                                    <div align="center"> 
                                        nameovstos</div></td>
                            </tr>

                        <?php
                        while ($resultovst = mysql_fetch_array($rsovst)) {
                            $ovstost = $resultovst[ovstost];
                            $nameovstos = $resultovst[nameovstos];
                            ?>

                                <tr> 
                                    <td width="20%"> 
                                        <div align="center"> 
                                <?php echo"$nameovstos"; ?></div></td>
            </tr>
            <?													  
            } 

            ?>

        </table>





    </body>
</html>












