<?php
ob_start();
session_start();

	include("config/connect.php"); 
	include("config/config.php"); 
	$Username=$_SESSION["Username"];
	//echo $Username;exit;
	
	if($Username == " ")
	{   

		echo "<meta charset='UTF-8'>";
		echo "��ͧ�������к���͹��Ѻ!";
		echo"<meta http-equiv='refresh' content='2;URL=index.php'>";
		exit();
	}

	$strSQLuser = "SELECT * FROM tabeluser WHERE Username = '$Username' ";
	$objQueryuser = mysql_query($strSQLuser);
	$objResultuser = mysql_fetch_array($objQueryuser);
	$Username1=$objResultuser["Username"];
	//echo $strSQLuser;exit;
?>

<!DOCTYPE html>
<html>
    <head>
    
        <meta charset="UTF-8">
        <title>�к��Ѵ��� Data Center �ç��Һ��</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="includes/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="includes/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="includes/bootstrap/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="includes/bootstrap/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="includes/bootstrap/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="includes/bootstrap/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="includes/bootstrap/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="includes/bootstrap/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="includes/bootstrap/css/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="includes/bootstrap/css/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          
        <![endif]-->
        <script>

			function fncSubmit() {

							
				if(document.frmMain.passold.value == "")
				{	alert(' ��͡������� ');	
							document.frmMain.passold.focus();
							return false; } 
							
				if(document.frmMain.passnew1.value == "")
				{	alert(' ��͡����������駷��˹�� ');	
							document.frmMain.passnew1.focus();
							return false; } 
							
				if(document.frmMain.passnew2.value == "")
				{	alert(' ��͡����������駷���ͧ ');	
							document.frmMain.passnew2.focus();
							return false; } 
				
			}
			
			
			</script>



    </head>
	<?php include "navigator.php";?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        ˹���á
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> ˹���á</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content"> 
                 	<div class="row"> 
                	<form method="post" enctype="multipart/form-data"   action="password_update.php" 
                                 name="frmMain" onSubmit="JavaScript:return fncSubmit();" >            
                     
                       
                       <section class="col-lg-5 connectedSortable">    
                            <div class="box box-solid box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">�ѹ�֡���˹�ҷ�� </h3>
                                </div>
                                
                                <div class="box-body">
                                	
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                Username :
                                            </div>
                                            <input type="text" class="form-control" name="Username" value="<?=$objResultuser["Username"];?> " readonly  />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                	 
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                ����-ʡ�� :
                                            </div>
                                            <input type="text" class="form-control"  name="Name"  
                                            value="<?=$objResultuser["Name"];?>"   readonly />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                ��͡������� :
                                            </div>
                                            <input type="text" class="form-control"  name="passold"  />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

									<div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-addon">
                                                 ��͡�������� 1 :
                                          	 </div>
                                           	 <input type="password" class="form-control" name="passnew1"/>  
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
    
									<div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-addon">
                                                 ��͡�������� 2 :
                                          	 </div>
                                           	 <input type="password" class="form-control" name="passnew2"/>  
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    
                                </div><!-- /.box-body -->
                                    <div class="box-footer">
                                	<div class="form-group">
                                   	<button  type="submit" class="btn btn-success" onclick="return confirm('��ͧ��úѹ�֡�������������')"><i class="fa fa-save"></i> �ѹ�֡������</button>
                                    <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'"><i class="fa fa-reply"></i> ��Ѻ˹���á</button>	
                                 </div><!-- /.form group -->
                                </div><!-- /.box-body -->


                            </div><!-- /.box -->
                        </section><!-- /.Left col -->
                        

                    </form>        
                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
            
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <script src="includes/bootstrap/js/jquery.min.js"></script>
        <script src="includes/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="includes/bootstrap/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="includes/bootstrap/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="includes/bootstrap/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        
        <!-- DATA TABES SCRIPT -->
        <script src="includes/bootstrap/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="includes/bootstrap/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        
        
        <!-- date-range-picker -->
        <script src="includes/bootstrap/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <script src="includes/bootstrap/js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="includes/bootstrap/js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="includes/bootstrap/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="includes/bootstrap/js/AdminLTE/demo.js" type="text/javascript"></script>

        <script src="includes/bootstrap/js/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="includes/bootstrap/js/lang/th.js"></script>
        <!-- fullCalendar -->
        <script src="includes/bootstrap/js/moment.min.js" type="text/javascript"></script>
        <script src="includes/bootstrap/js/fullcalendar.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="includes/bootstrap/js/lang/th.js"></script>
        <!-- Page specific script -->

    </body>
</html>
