<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">     
    <META HTTP-EQUIV="Refresh" CONTENT="180;URL=http://192.168.8.3/webhi/moniter/opd/slider_sur_list.php">      
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title> ระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--<link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <link href="../includes/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 <!--MENU  HEAD-->
    <link rel="stylesheet" href="../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxgrid.selection.js"></script> 
    <script type="text/javascript" src="../jqwidgets/jqxgrid.columnsresize.js"></script> 
    <script type="text/javascript" src="../jqwidgets/jqxdata.js"></script> 
   
  <style type= text/css>


@font-face {
  font-family: "THSarabunNew";
  src: url("../fonts/THSarabunNewBold.woff2") format("woff2"),
    url("../fonts/THSarabunNewBold.woff") format("woff"),
    url('../fonts/THSarabunNewBold.ttf') format('truetype');
  }


.panel-body {background-color: #000000; }
.bigfont1 {font-size: 15px; font-weight: bold; font-family: 'THSarabunNew';}
.bigfont2 {font-size: 40px; font-weight: bold; font-family: 'THSarabunNew';}
.bigfont3 {font-size: 30px; font-weight: bold;  font-family: 'THSarabunNew';}
.bigfont4 {font-size: 30px; font-weight: bold; color:#4CC417; font-family: 'THSarabunNew';}
.bigfont5 {font-size: 30px; font-weight: bold; color:#FFA500;   font-family: 'THSarabunNew';}
.left-data {width: 33.25%; border:#f00 0px solid; float: left; font-family: 'THSarabunNew'; margin-top: -10px;}
.right-data {width: 33.25%; border:#f00 0px solid; float: left; font-family: 'THSarabunNew';  margin-top: -10px;}
.center-data {width: 33.25%; border:#f00 0px solid; float: left; font-family: 'THSarabunNew';  margin-top: -10px;}
.jqx-grid-header { 
 border:0px solid #f00 !important;
 height: 35px !important;
 text-align: center !important;
font-size: 23px; font-weight:bold !important;

}


</style>             
                
   </head>

<body>

 

  <!-- Navigation -->

  

        <!-- Page Content -->
       <div id="site-wrapper">
            <div class="row">
                <div class="col-lg-12">
               <p style=" width:100%;";><center><div style=" width:10%; font-size:14px; padding-left:5px; float: left;  border:#f00 0px solid;"><span class="btn btn-default"><a href="todaynew.php">BACK TO MENU</a></span></div><div style=" width:90%; font-size:25px; padding-left:25px; float: left;  border:#f00 0px solid;">
                <?php 

$day=date("d");

  $month=date("m");

  $time=date("H:i:s");

  $yearthai=date("Y")+543;

 switch ($month) {
       case 1:
        echo "วันที่ : $day มกราคม $yearthai เวลา: $time";
        break;
    case 2:
         echo "วันที่ : $day กุมภาพันธ์ $yearthai เวลา:  $time";
        break;
  case 3:
         echo "วันที่ : $day มีนาคม $yearthai เวลา:  $time";
        break;
    case 4:
         echo "วันที่ : $day เมษายน $yearthai เวลา:  $time";
        break;
 case 5:
         echo "วันที่ : $day พฤษภาคม $yearthai เวลา:  $time";
        break;
    case 6:
         echo "วันที่ : $day มิถุนายน $yearthai เวลา:  $time";
        break;
        case 7:
        echo "วันที่ : $day กรกฏาคม $yearthai เวลา:  $time";
        break;
       case 8:
        echo "วันที่ : $day สิงหาคม $yearthai เวลา:  $time";
        break;
         case 9:
         echo "วันที่ : $day กันยายน $yearthai เวลา:  $time";
        break;
          case 10:
         echo "วันที่ : $day ตุลาคม $yearthai เวลา:  $time";
        break;
            case 11:
        echo "วันที่ : $day พฤษจิกายน $yearthai เวลา:  $time";
        break;
            case 12:
        echo "วันที่ : $day ธันวาคม $yearthai เวลา:  $time";
        break;
}

                ?>
              </div></center></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div  style=" width:100%; border:#f00 0px solid; float: left; font-size:30px; background-color:#FFA500; color:#FFFFFF; "><center>จำนวนผู้รับบริการแยกรายคลีนิค</center></div>   
                             
                        <div class="panel-body" >
                        
                            
                           <div class="left-data">     
                                                                
                              <div class="row show-grid">
                              <div id="showdiv" ></div> 
                              </div>
                           </div>
  
                            <div class="center-data">    
                                                      
                              <div class="row show-grid">
                              <div id="showdiv2" ></div> 
                              </div>
                                </div>  

                                               
                            <div class="right-data">    
                                                      
                              <div class="row show-grid">
                              <div id="showdiv3" ></div> 
                              </div>
                                </div>  

                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


       
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
   

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
  
   <script src="plugins/opd_clinic_total.js"></script>
   <script src="plugins/opd_clinic_total_col_2.js"></script>
   <script src="plugins/opd_clinic_total_col_3.js"></script> 

</body>

</html>


