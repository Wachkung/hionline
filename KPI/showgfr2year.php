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
   
  
      <script type="text/javascript" src="../jqwidgets/jqxdatetimeinput.js"></script>
<script type="text/javascript" src="../jqwidgets/jqxcalendar.js"></script>
<script type="text/javascript" src="../jqwidgets/jqxtooltip.js"></script>
<script type="text/javascript" src="../jqwidgets/globalization/globalize.js"></script>
                 
         <link rel="stylesheet" href="../jqwidgets/styles/jqx.summer.css" type="text/css"/>       
  


         <script type="text/javascript" src="../js/generatedata.js"></script>
 <script type="text/javascript" src="../jqwidgets/jqxdata.export.js"></script> 
    <script type="text/javascript" src="../jqwidgets/jqxgrid.export.js"></script> 
<script type="text/javascript" src="../jqwidgets/jqxgrid.columnsresize.js"></script> 


  <script type="text/javascript" src="../jqwidgets/jqxnumberinput.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxwindow.js"></script>

</head>

<body>

  <!--MENU  HEAD-->
  

        <!-- Navigation -->
      
           
            <!-- /.navbar-header -->

       
       <?php include_once ('../REPORT/menu.php'); ?>
        
   
   
        

        <!-- Page Content -->
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 ">
                    <h1 class="page-header alert btn-success active ">DM HT  GFR  แยกตามกลุ่ม 2 ปีย้อนหลัง</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            
            
            
            
            
            
            
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 1  DM HT All GFR  แยกตามกลุ่ม 2 ปีย้อนหลัง </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="gfr_dm_ht_2year"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 2  DM HT  GFR  แยกตามกลุ่ม 2 ปีย้อนหลัง  </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="gfr_dm_htonly_2year"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 2 NEW  DM HT  GFR  แยกตามกลุ่ม 2 ปีย้อนหลัง  </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="newgfr_dm_htonly_2year"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 3   DM   GFR  แยกตามกลุ่ม 2 ปีย้อนหลัง  </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="gfr_dm_2year"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
                         
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 3 NEW  DM   GFR  แยกตามกลุ่ม 2 ปีย้อนหลัง  </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="newgfr_dm_2year"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
                              
                         
             
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
  
       <!--   <script src="../js/dtnew.js"></script>  -->
        
    <script src="plugins/gfr_dm_ht_2year.js"></script>
    <script src="plugins/gfr_dm_htonly_2year.js"></script>
       <script src="plugins/newgfr_dm_htonly_2year.js"></script> 
            <script src="plugins/gfr_dm_only_2year.js"></script>
             <script src="plugins/newgfr_dm_only_2year.js"></script>
</body>
</body>

</html>


