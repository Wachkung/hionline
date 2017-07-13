<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moniter </title>

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
   
    <script type="text/javascript" src="../jqwidgets/jqxdata.export.js"></script> 
<script type="text/javascript" src="../jqwidgets/jqxgrid.export.js"></script> 
 
                
   </head>

<body>

	<?php include_once ('menu.php'); ?> 
        

        <!-- Page Content -->
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header alert btn-success active">สรุปผลงานย้อนหลัง   3 ปี</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>ผู้ป่วยนอก  ย้อนหลัง   3 ปี</h3>
                            <p>อธิาย.
                            </p>
                                
           
       
                           
                             <div>
                <input type="button" value="Export to Excel" id='excelExport' />
                 
            </div>
                              <div class="row show-grid">
                          <div id="yearopd3"></div> 
                          
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
                            <h3> ผู้ป่วยใน ย้อนหลัง 3 ปี</h3>
                            <p> อธิบาย</p>
                      
                          <div>
                <input type="button" value="Export to Excel" id='excelExport4' />
                 
            </div>  
                            <div id="ipd3"></div> 
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
                            <h3> ผู้ป่วยใน readmittedward ย้อนหลัง 3 ปี</h3>
                            <p> อธิบาย</p>
                     <div>
                <input type="button" value="Export to Excel" id='excelExport5' />
                 
            </div>   
                            <div id="readmittedward"></div> 
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
                            <h3>รายงานการเสียชีวิตแยกตามตึก3 ปี ย้อนหลัง</h3>
                            <p> อธิบาย</p>
                             
                               <div>
                <input type="button" value="Export to Excel" id='excelExport8' />
                 
            </div>  
                            
                            <div id="deadward3"></div> 
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
                            <h3>รายงานการผ่าตัด 3 ปี ย้อนหลัง</h3>
                            <p>อธิบาย</p>
                            <div>
                <input type="button" value="Export to Excel" id='excelExport2' />
                 
            </div>
                            <div id="orssum3"></div> 
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
                            <h3 id="grid-responsive-resets">ผู้ป่วยนอก แยกตาม คลีนิค  ย้อนหลัง   3 ปี</h3>
                            <p> อธิบาย</p>
                            <div id="depsum3"></div> 
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
                            <h3 id="grid-offsetting">ผู้ป่วยป่วยนอก แยกตาม สิทธิ์  ย้อนหลัง   3 ปี</h3>
                            <p> อธิบาย</p>
                             <div id="opdpttype3"></div> 
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
                            <h3 id="grid-nesting">ผู้มารับบรืการ ทางทันตกรรม  ย้อนหลัง   3 ปี</h3>
                            <p>อธิบาย</p>
                               <div id="dentalsum3"></div> 
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
                            <h3 id="grid-column-ordering">ผู้มารับบรืการ ประกันสังคม  ย้อนหลัง   3 ปี</h3>
                            <p> อธิบาย</p>
                            <div id="ssosum3"></div> 
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
                            <h3 id="grid-column-ordering">ส่งต่อ  ย้อนหลัง   3 ปี</h3>
                            <p> อธิบาย</p>
                            <div id="wardsum3"></div> 
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
                            <h3 id="grid-column-ordering">รายงาน การคลอด ย้อนหลัง   3 ปี</h3>
                            <p> อธิบาย</p>
                            <div id="lrsum3"></div> 
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
  
   <script src="plugins/treeall.js"></script>
    <script src="plugins/ipd3.js"></script>
     <script src="plugins/deadipd3.js"></script>
     
          <script src="plugins/depsum3.js"></script>
           <script src="plugins/opdpttype3.js"></script>
           <script src="plugins/dentalsum3.js"></script>
           
             <script src="plugins/ssosum3.js"></script>
            <script src="plugins/wardsum3.js"></script>
             <script src="plugins/lrsum3.js"></script>
             <script src="plugins/readmittedward.js"></script>
           
</body>
</body>

</html>


