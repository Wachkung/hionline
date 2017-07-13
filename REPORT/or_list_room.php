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
   
  <style type= text/css>


@font-face {
  font-family: "THSarabunNew";
  src: url("../fonts/THSarabunNewBold.woff2") format("woff2"),
    url("../fonts/THSarabunNewBold.woff") format("woff"),
    url('../fonts/THSarabunNewBold.ttf') format('truetype');
  }


html { 
    background-color: #000000; 
  }
  body { 
    background-color: #000000; 
  }

.panel-body {background-color: #000000; }
.bigfont1 {font-size: 19px; font-weight: bold; font-family: 'THSarabunNew';}
.bigfont2 {font-size: 25px; font-weight: bold; font-family: 'THSarabunNew';}
.bigfont3 {font-size: 25px; font-weight: bold;  font-family: 'THSarabunNew';}
.bigfont4 {font-size: 25px; font-weight: bold; color:#000000; font-family: 'THSarabunNew';}
.bigfont5 {font-size: 25px; font-weight: bold; color:#000000;   font-family: 'THSarabunNew';}
.left-data {width: 50%; border:#f00 0px solid; float: left; font-family: 'THSarabunNew'; margin-top: -10px;}
.right-data {width: 49%; border:#f00 0px solid; float: left; font-family: 'THSarabunNew'; margin-top: -10px;}
.jqx-grid-header { 
 border:0px solid #f00 !important;
 height: 35px !important;
 text-align: center !important;
font-size: 18px; font-weight:bold !important;

}


</style>             
                
   </head>

<body>

 

  <!-- Navigation -->

  

        <!-- Page Content -->
       <div id="site-wrapper">
            <div class="row">
                <div class="col-lg-12"  style="background-color:#ffffff;" >
               <p style="width:100%;";><center><div id="showTime" style="font-size:15px; padding-left:25px;"></center></div></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" >
                         <div  style=" width:50%; border:#f00 0px solid; float: left; font-size:18px; background-color:#3399CC; color:#FFFFFF; "><center>ROOM 1</center></div>   
                         <div  style="width:50%; border:#f00 0px solid;float: left; font-size:18px; background-color:#CC3333; color:#FFFFFF; "><center>ROOM 2</center></div>      
                        <div class="panel-body">
                        
                            
                           <div class="left-data">     
                                                                
                              <div class="row show-grid">
                              <div id="showdiv1" ></div> 
                              </div>
                           </div>
  
                                               
                            <div class="right-data">    
                                                      
                              <div class="row show-grid">
                              <div id="showdiv2" ></div> 
                              </div>
                                </div>  

                        </div>
                    </div>


 <div class="panel panel-default" >
                         <div  style=" width:50%; border:#f00 0px solid; float: left; font-size:18px; background-color:#996600; color:#FFFFFF; "><center>ROOM 3</center></div>   
                         <div  style="width:50%; border:#f00 0px solid;float: left; font-size:18px; background-color:#008000; color:#FFFFFF; "><center>ROOM 4</center></div>      
                        <div class="panel-body">
                        
                            
                           <div class="left-data">     
                                                                
                              <div class="row show-grid">
                              <div id="showdiv3" ></div> 
                              </div>
                           </div>
  
                                               
                            <div class="right-data">    
                                                      
                              <div class="row show-grid">
                              <div id="showdiv4" ></div> 
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
  
   <script src="plugins/or_list_room1.js"></script>
  <script src="plugins/or_list_room2.js"></script>
  <script src="plugins/or_list_room3.js"></script>
  <script src="plugins/or_list_room4.js"></script>
    

</body>

</html>


