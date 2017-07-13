<?
ob_start();
session_start();
	include("./config/connect.php"); 
	include("./config/config.php"); 
	
	$Username=$_SESSION["Username"];
		//echo $IDCARD1 ; exit;
	if($Username == " ")
	{   
		//echo $Username ; exit;

		echo "<meta charset='UTF-8'>";
		echo "ต้องเข้าสู่ระบบก่อนครับ!";
		echo"<meta http-equiv='refresh' content='2;URL=../index.php'>";
		exit();
	}

?>

<!DOCTYPE html>
<html>
    <head>
    
        <meta charset="TIS620">
        <title> ระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม </title>
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
        <!-- DATA TABLES -->
        <link href="../includes/bootstrap/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          
        <![endif]-->
    </head>
	<?include "navigator.php";?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
         				หน้าแรก
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h4>
               							ระบบผู้ดูแลระบบ
                                    </h4>
                                    <p>
               							ศุนย์เทคโนโลยีสารสนเทศ
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <a href="./ADMIN/index.php" class="small-box-footer">
                                     More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h4>
               							ระบบประวัติย้อนหลัง
                                    </h4>
                                    <p>
               							ศุนย์เทคโนโลยีสารสนเทศ
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <a href="./SERVICE/index.php" class="small-box-footer">
                                     More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                            	
                                <div class="inner">
                                    <h4>
               							ระบบรายงาน HI ON WEB
                                    </h4>
                                    <p>
              							ศุนย์เทคโนยีสารสนเทศ
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <a href="./REPORT/todaynew.php" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row (main row) -->
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
        <script type="text/javascript">
            $(function() {

                /* initialize the external events
                 -----------------------------------------------------------------*/
                function ini_events(ele) {
                    ele.each(function() {

                        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                        // it doesn't need to have a start or end
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        };

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject);

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 1070,
                            revert: true, // will cause the event to go back to its
                            revertDuration: 0  //  original position after the drag
                        });

                    });
                }
                ini_events($('#external-events div.external-event'));

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                        m = date.getMonth(),
                        y = date.getFullYear();
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    buttonText: {//This is to add icons to the visible buttons
                        prev: "ก่อนหน้า ",
                        next: " ถัดไป",
                        today: 'วันนี้',
                        month: 'เดือน',
                        week: 'สัปดาห์',
                        day: 'วัน'
                    },
                    events: [
					
						
						
						<?php   //แสดงงานแผน
							$sql=" SELECT * FROM	 meeting_list  "; 
							$result = mysql_query($sql); 
							while($data= mysql_fetch_array($result)) {
							$room3=$data['room'];
									$sqlroom=" SELECT * FROM meeting_room where id = '$room3'"; 
									$resultroom = mysql_query($sqlroom); 
									$dataroom = mysql_fetch_array($resultroom)
						?>
                        {
							
                            title: '<?=$data['name']?> ณ. <?=$dataroom['name']?> เวลา. <?=$data['strtime']?> ถึง <?=$data['endtime']?> ',
                            start: '<?=$data['strdate']?>',
                            end: '<?=$data['enddate']?>',
                            url: '',
                            backgroundColor: "#006400", //Primary (light-blue)
                            borderColor: "#006400" //Primary (light-blue)
                        },
						
						<?php  } ?>
                    ],
					eventClick: function(event) {
						if (event.url) {

							window.open(event.url);
							return false;
						}
					},
				
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });

                /* ADDING EVENTS */
                var currColor = "#f56954"; //Red by default
                //Color chooser button
                var colorChooser = $("#color-chooser-btn");
                $("#color-chooser > li > a").click(function(e) {
                    e.preventDefault();
                    //Save color
                    currColor = $(this).css("color");
                    //Add color effect to button
                    colorChooser
                            .css({"background-color": currColor, "border-color": currColor})
                            .html($(this).text()+' <span class="caret"></span>');
                });
                $("#add-new-event").click(function(e) {
                    e.preventDefault();
                    //Get value and make sure it is not null
                    var val = $("#new-event").val();
                    if (val.length == 0) {
                        return;
                    }

                    //Create events
                    var event = $("<div />");
                    event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
                    event.html(val);
                    $('#external-events').prepend(event);

                    //Add draggable funtionality
                    ini_events(event);

                    //Remove event from text input
                    $("#new-event").val("");
                });
            });
        </script>

    </body>
</html>
