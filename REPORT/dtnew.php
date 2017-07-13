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
      
      <?php include_once ('menu.php'); ?>     
            <!-- /.navbar-header -->

       

   
        

        <!-- Page Content -->
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">รายงานทันตกรรม ค้นหาตามวันที่</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             
                            <div class="row">
              <div class="col-lg-12">
            <div class="form-group">
           <label class="control-label col-sm-1">  </label>
             <label class="control-label col-sm-2 btn bg-warning ">กรุณา เลือก จากวันที่ </label>
          
       <div  class="control-label col-sm-2" id='jqxdatetimeinput'></div> 
            <label class="control-label col-sm-1">  </label>
          <label class="control-label col-sm-1 btn bg-warning ">ถึงวันที่ </label>
          <label class="control-label col-sm-2"><div id='jqxdatetimeinput2'></div></label>
           <div align="center">
          <input id="getDateButton" type="button" value="ค้นหาข้อมูล"/>
      
           
           
            
           
           
           
           
           
           </div>
      </div>
                     </div>
                </div>
                        </div>
                    </div>
                </div>
               
                <!-- /.col-lg-12 -->
                
                
               
                
                
                 </div>
            
            
            
            
            
            
            
            
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 1 ข้อมูลทั่วไป    </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtpttype2"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 1 ข้อมูลทั่วไป    </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtpttype"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
  
    
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 2  ข้อมูลงานส่งเสริมทันตสุขภาพและทันตกรรมป้องกัน    </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtnew_2"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 2  ข้อมูลงานส่งเสริมทันตสุขภาพและทันตกรรมป้องกัน หญิงตั้งครรภ์ (ต่อ)    </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtnew_prg"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
            
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 2  ข้อมูลงานส่งเสริมทันตสุขภาพและทันตกรรมป้องกัน  (ต่อ)    </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtnew_2_1"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 2  ข้อมูลงานส่งเสริมทันตสุขภาพและทันตกรรมป้องกัน หญิงตั้งครรภ์ (ต่อ)    </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtnew_2_2"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
            
            
            
            
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 3  ข้อมูลรักษาทางทันตกรรม    </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtnew_dttx3"></div> 
                             <div id="dtnew_dttx3_1"></div> 
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            
            
             <!-- /.row -->
            
               
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 3  ข้อมูลรักษาทางทันตกรรม (งานเฉพาะสาขา )   </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          
                             <div id="dtnew_dttx3_3"></div> 
                             <div id="dtnew_dttx3_4"></div> 
                             <div id="dtnew_dttx3_5"></div> 
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            
            
             <!-- /.row -->
            
            
            
            
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 4  ข้อมูลงานรักษาทางทันตกรรมประดิษฐ์ ตามโครงสร้างหลักประกันสุขภาพถ้วนหน้า   </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtnew_dttx4"></div> 
                             <div id="dtnew_dttx5"></div> 
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
                         <!-- /.row -->
 
                         <!-- /.row --><div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3>ส่วนที่ 5  ข้อมูลงานรักษาทางทันตกรรม treatment </h3> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="dtnew_treament"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
                         <!-- /.row -->
                         
                         
                         
                         
             
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
        
     
      <script src="plugins/dtpttype.js"></script>
      
       <script src="plugins/dtpttype2.js"></script>
      <script src="plugins/dtnew_2.js"></script>
      
       <script src="plugins/dtnew_2_1.js"></script>
        <script src="plugins/dtnew_2_2.js"></script>
      <script src="plugins/dtnew_preg.js"></script>  
         <script src="plugins/dtnew_dttx3.js"></script>
         
         
          <script src="plugins/dtnew_dttx3_1.js"></script>  
          
           <script src="plugins/dtnew_dttx3_3.js"></script>   
          <script src="plugins/dtnew_dttx3_4.js"></script>   
         <script src="plugins/dtnew_dttx3_5.js"></script>   
          
          
          <script src="plugins/dtnew_dttx4.js"></script>  
             <script src="plugins/dtnew_dttx5.js"></script> 
          <script src="plugins/dtnew_treament.js"></script>  
          
</body>
</body>

</html>


