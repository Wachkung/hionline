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
    <?php include_once ('menu.php'); ?>
  
               <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                 
                    
                 
                    <h1 class="page-header  alert alert-warning">รายงาน สถิติและผู้มารับบริการ งานห้องบัตร </h1>
             
                    
                    
                   

<!-------->
<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#one" data-toggle="tab">รายงาน วันนี้</a></li>
        <li><a href="#two" data-toggle="tab"> รายงาน เดือนนี้</a></li>
        <li><a href="#three" data-toggle="tab">รายงาน ตามไตรมาส</a></li>
        <li><a href="#four" data-toggle="tab">รายงานปี</a></li>
        <li><a href="#five" data-toggle="tab">กราฟ</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 class=" alert alert-success">รายงานผู้มารับบริการงานผู้ป่วยนอกวันนี้รวมทั้งสิ้น</h4> 
                            <h3> </h3>
 


                            <p> 

  
</p>
                              <div class="row show-grid">
                       

 <div id="showdivopdt"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
       
        
        
        
        
        <div>
                <input type="button" value="Export to Excel" id='excelExportopduc' />
                 
            </div> 


             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h4 class=" alert alert-success">รายงานผู้มารับบริการงานผู้ป่วยนอกวันนีแยกตามสิทธิ์</h4> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="showdivopduc"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>



              <div>
                <input type="button" value="Export to Excel" id='excelExport9' />
                 
            </div>  





            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h4 class=" alert alert-success">รายงานผู้มารับบริการงานผู้ป่วยนอก</h4> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="showdiv9"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
           <div>
                <input type="button" value="Export to Excel" id='excelExport10' />
                 
            </div>  
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h4 class=" alert alert-success">รายงานผู้มารับบริการงานผู้ป่วยนอก(ตามเวร)</h4> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="showdiv10"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
           
    <div>
                <input type="button" value="Export to Excel" id='excelExport11' />
                 
            </div>  
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h4 class=" alert alert-success">รายงานผู้มารับบริการงานผู้ป่วยนอก(20 อันดับโรคเฉพาะเวชปฏิบัติ)</h4> 
                            <h3> </h3>
                            <p> </p>
                              <div class="row show-grid">
                          <div id="showdiv11"></div> 
                            
                           
                            
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
        
       
        
        
        
        
        
        </div>
        <div class="tab-pane" id="two">
            <h1>two</h1>
            <p>two</p>
        </div>
        
        <div class="tab-pane" id="three">
            <h1>three</h1>
            <p> three</p>
        </div><div class="tab-pane" id="four">
            <h1>four</h1>
            <p> </p>
        </div>
        <div class="tab-pane" id="five">
            <h1>five</h1>
            <p> </p>
        </div>
    </div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>    
</div> <!-- container -->
                </div>
                <!-- /.col-lg-12 -->
          
            <!-- /.row -->
         
            <!-- /.r
            <!-- /.row -->
  <!-- Navigation -->
      
           
 


       
        

   

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
  
    
   <script src="plugins/today_opd_total.js"></script>
  <script src="plugins/today_opd_uc.js"></script>
 <script src="plugins/today_opd.js"></script>
  <script src="plugins/time_today_opd.js"></script>
   <script src="plugins/today_opd_dx.js"></script>
           
</body>
</body>

</html>