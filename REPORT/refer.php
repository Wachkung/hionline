<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
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
   
  
      
                 
                
   </head>

<body>

<!--MENU  HEAD-->
  

        <!-- Navigation -->
      
      <?php include_once ('menu.php'); ?>     
            <!-- /.navbar-header -->

       

       

        
        

        <!-- Page Content -->
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">สรุปรายงานการRefer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>ส่งต่อ  refer</h3>
                            <p>อธิาย.</p>
                              <div class="row show-grid">
                          <div id="wardsum3"></div> 
                            
                            <p>อธิบาย</p>
                            
                              </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3> รับ refer</h3>
                            <p> อธิบาย</p>
                      <div id="resiverefer"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>รับ refer ตาม แผนก</h3>
                            <p> อธิบาย</p>
                             <div id="referincln"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>ส่งออก แยกตามคลีนิค</h3>
                            <p>อธิบาย   ข้อมูล  ย้อนหลังไม่มีข้อมูล</p>
                             <div id="clnreferout"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 id="grid-responsive-resets"> Refer  นอก ใน   ย้อนหลัง   3 ปี</h3>
                            <p> อธิบาย</p>
                            <div id="referinout"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 id="grid-offsetting"> สาเหตุ  Refer  ผู้ป่วยใน  ย้อนหลัง   3 ปี</h3>
                            <p> อธิบาย</p>
                             <div id="resultrefer"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 id="grid-nesting">สถานบริการที่ส่งต่อ ผู้ป่วยใน    ย้อนหลัง   3 ปี</h3>
                            <p>อธิบาย</p>
                               <div id="iptstaionrefer"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 id="grid-nesting">IPD ลำดับโรคที่ refer ย้อนหลัง   3 ปี</h3>
                            <h3 id="grid-nesting">IPD ลำดับโรคที่ refer   ปี <?php echo date('Y')+541   ?>    </h3>
                            <p>อธิบาย</p>
                               <div id="refernameipd"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<div class="row">
             <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 id="grid-nesting">IPD ลำดับโรคที่ refer ย้อนหลัง   3 ปี  ต่อ </h3>
                            <h3 id="grid-nesting">IPD ลำดับโรคที่ refer   ปี <?php echo date('Y')+542   ?>    </h3>
                            <p>อธิบาย</p>
                               <div id="refernameipd2"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

       <div class="row">
             <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 id="grid-nesting">IPD ลำดับโรคที่ refer ย้อนหลัง   3 ปี  ต่อ </h3>
                            <h3 id="grid-nesting">IPD ลำดับโรคที่ refer   ปี <?php echo date('Y')+543   ?>    </h3>
                            <p>อธิบาย</p>
                               <div id="refernameipd3"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            
             <div class="row">
             <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 id="grid-nesting">IPD ลำดับโรคที่ รับrefer ย้อนหลัง   3 ปี  ต่อ </h3>
                            <h3 id="grid-nesting">IPD ลำดับโรคที่ รับrefer   ปี <?php echo date('Y')+541   ?>    </h3>
                            <p>อธิบาย</p>
                               <div id="refernameipdout"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
             <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 id="grid-nesting">IPD ลำดับโรคที่ รับrefer ย้อนหลัง   3 ปี  ต่อ </h3>
                            <h3 id="grid-nesting">IPD ลำดับโรคที่ รับrefer   ปี <?php echo date('Y')+542   ?>    </h3>
                            <p>อธิบาย</p>
                               <div id="refernameipdout2"></div> 
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
             <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 id="grid-nesting">IPD ลำดับโรคที่ รับrefer ย้อนหลัง   3 ปี  ต่อ </h3>
                            <h3 id="grid-nesting">IPD ลำดับโรคที่ รับrefer   ปี <?php echo date('Y')+543   ?>    </h3>
                            <p>อธิบาย</p>
                               <div id="refernameipdout3"></div> 
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
  
     <script src="plugins/resiverefer.js"></script>
             
            <script src="plugins/referincln.js"></script>
           
            <script src="plugins/wardsum3.js"></script>
              <script src="plugins/clnreferout.js"></script>
            <script src="plugins/referinout.js"></script>
            
             <script src="plugins/resultrefer.js"></script>
              <script src="plugins/iptstaionrefer.js"></script>
</body>
</body>

</html>

