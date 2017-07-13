<!DOCTYPE html>
<html lang="en">
<head>
<title> ระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม </title>
 <meta http-equiv="Content-Type" content="text/html;  charset=utf-8 "> 
<link rel="stylesheet" href="../sample/ ../jqwidgets/styles/jqx.base.css" type="text/css"/>
 <script type="text/javascript" src="../js/cdn/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="../jqwidgets/jqxdatetimeinput.js"></script>
<script type="text/javascript" src="../jqwidgets/jqxcalendar.js"></script>
<script type="text/javascript" src="../jqwidgets/jqxtooltip.js"></script>
<script type="text/javascript" src="../jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="../jqwidgets/globalization/globalize.js"></script>


    <link rel="stylesheet" href="../jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="../jqwidgets/styles/jqx.summer.css" type="text/css" />
    <link rel="stylesheet" 
    href="../jqwidgets/styles/jqx.darkblue.css" type="text/css" />

<script type="text/javascript" src="../jqwidgets/jqxdata.js"></script>



 
    <script type="text/javascript" src="../jqwidgets/jqxmenu.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/screen.css" media="screen" />
	 
   <?php  ################# boostrap?>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">      <?php // <-------- รองรับจอ ขนาดเล็ก    -->  ?>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
 
  <script type="text/javascript" src="../jqwidgets/jqxdraw.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxchart.core.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxgrid.selection.js"></script>	
    <script type="text/javascript" src="../jqwidgets/jqxgrid.sort.js"></script>		
    <script type="text/javascript" src="../jqwidgets/jqxdata.js"></script>	
     <!-----  calenda-->

 </head>
<body>
<div id='content'>
  <script type="text/javascript">
      $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '250px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '250px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 //	alert (date);
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			 
			 
			 
		{
			 var theme = 'classic';
            var source =
            {      
                datatype: "json",
                datafields: [
					 { name: 'icd10' },
					 { name: 'icd10name' } ,
				 	 { name: 'c5opd' }
			 
                ],
                     type: "POST",
				  
				   url: "demo22.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
			//    root: 'Rows',
           //     beforeprocessing: function (data) {
         //           source.totalrecords = data[0].TotalRows;
       //         },
         //       sort: function () {
                    // update the grid and send a request to the server.
         //           $("#jqxgrid1").jqxGrid('updatebounddata');
       ///         }
             }; 
			
			
			
            var dataadapter = new $.jqx.dataAdapter(source);
           
		   
		 //  alert(dataadapter);
		    // initialize jqxGrid
            $("#jqxgrid1").jqxGrid(
            {
                width: 600,
                source: dataadapter,
                theme: theme,
                autoheight: true,
                pageable: true,
                virtualmode: true,
                sortable: true,
              
			   
			    rendergridrows: function () {
                    return dataadapter.records;
                },
                columns: [
                   //   
                      { text: 'icd10', datafield: 'icd10', width: 200 },
                    { text: 'icd10name', datafield: 'icd10name', width: 250 } ,
					 { text: 'c5opd', datafield: 'c5opd', width: 200 }
                     
                  ]
            });
     
		   <!---                                                             --->
		   
		   
		  //   alert (data);
		    
		 //alert (html);	
		 
		}
		});//จบการส่งข้อมูล

	//	return false;
			 
			 // alert(formattedDate);
         });
   //  });
   
   
    
   
   
   
   
  </script>  
  
      
      
      
         <script type="text/javascript">
       
	   
	   
	    $(document).ready(function () {
            // prepare chart data as an array            
          var theme = '';
		   $("#jqxdatetimeinput").jqxDateTimeInput({ width: '250px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '250px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
		  
		 // alert(date);
		  
		  
		  
		    var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'icd10' },
					 { name: 'icd10name' } ,
				 	 { name: 'c5opd' }
                ],
          //     
			  type: "POST",
				//   url: 'demo221.php',
				     url: "demo22.php",
				
				//   localdata: source,
				// data:( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
				  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' 
				    
				  
				  ),
			
          
		   
		    }; 
			
			 // sort: function () {
                    // update the grid and send a request to the server.
            //        $("#chartContainer").jqxChart('updatebounddata');
            //    }
			
             var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "Economic comparison",
                description: "GDP and Debt in 2010",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'icd10',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 50,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 160,
                                displayValueAxis: true,
                                description: 'GDP & Debt per Capita($)'
                            },
                            series: [
                                    { dataField: 'c5opd', displayText: 'icd10'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 10,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'c5opd', displayText: 'Debt (% of GDP)', opacity:0.3 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

            // setup the chart
            $('#chartContainer').jqxChart(settings);
        });
  
  
   });
  
  
    </script>
     
      
      
      
      
      
      
      
     
   
  
      <script type="text/javascript">
            $(document).ready(function () {
                // Create a jqxMenu
              $("#jqxMenu").jqxMenu({ height: 40, theme: 'summer'});
            });
        </script>
      
      
      <!----  MENU -->
      
           <div id='content'>
      
 <div id='jqxWidget'>
            <div id='jqxMenu'>
                <ul>
                    <li><a href="#">หน้าหลัก</a></li>
                    <li>งานผู้ป่วยนอก
                         <ul>
                            <li><a href="#">10อันดับโรต</a>
                                <ul>
                                    <li><a href="#">10อันดับโรต รายเดือน</a></li>
                                    <li><a href="#">10อันดับโรต รายปี</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ผู้ป่วยรายใหม่่ในเดือน</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">รายโรค</a></li>
                         </ul>
                    </li>
                        <li>งานผู้ป่วยใน
                         <ul>
                            <li><a href="#">10อันดับโรต</a>
                                <ul>
                                    <li><a href="#">10อันดับโรต รายเดือน</a></li>
                                    <li><a href="#">10อันดับโรต รายปี</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ผู้ป่วยรายใหม่่ในเดือน</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">รายโรค</a></li>
                         </ul>
                    </li>
                        <li>งานห้องผ่าตัด
                         <ul>
                            <li><a href="#">10อันดับโรต</a>
                                <ul>
                                    <li><a href="#">10อันดับโรต รายเดือน</a></li>
                                    <li><a href="#">10อันดับโรต รายปี</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ผู้ป่วยรายใหม่่ในเดือน</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">รายโรค</a></li>
                         </ul>
                    </li>
                       <li>งานประกันสังคม
                         <ul>
                            <li><a href="#">10อันดับโรต</a>
                                <ul>
                                    <li><a href="#">10อันดับโรต รายเดือน</a></li>
                                    <li><a href="#">10อันดับโรต รายปี</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ผู้ป่วยรายใหม่่ในเดือน</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">รายโรค</a></li>
                         </ul>
                    </li>
                    <li>งานโรคเรื้อรัง
                         <ul>
                            <li><a href="#">10อันดับโรต</a>
                                <ul>
                                    <li><a href="#">10อันดับโรต รายเดือน</a></li>
                                    <li><a href="#">10อันดับโรต รายปี</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ผู้ป่วยรายใหม่่ในเดือน</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">รายโรค</a></li>
                         </ul>
                    </li>
                    <li><a href="#">ติดต่อเรา</a></li>
                     <li><a href="#"> </a></li>
                     
                      <li><a href="#"> </a></li>
                       <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                     
                      <li><a href="#"> </a></li>
                       <li><a href="#"> </a></li>
                    
                    <li><a href="#">  REPORT  HI   FOR  WEB  VER.2</a></li>
                    
                    
                </ul>
            </div>
        </div>
    </div>
 
 <div id="header">
	 <table width="100%" border="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</div>
<div class="colmask leftmenu">
	<div class="colleft">
		<div class="col1">
			<!-- Column 1 start -->
			 <table width="100%" border="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

			<!-- Column 1 end -->
		</div>
		<div class="col2">
			<!-- Column 2 start -->
			 <table width="100%" border="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

			<!-- Column 2 end -->
		</div>
	</div>
</div>
<div id="footer">
	 <table width="100%" border="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</div>

 
 
 
 
 
  <div class="row">

  <div class="col-md-12" > 
    <table width="100%" border="1">
  <tr ><td> <table   width="95%" border="1" align="center">
      <tr >
    <td class="alert-warning">รายงานผู้ป่วยนอก</td>
  </tr>
</table>
  </tr>
</table>
 </tr>
</table>
   </div>
    
 
</div>
  
   
  <div class="row">

  <div class="col-md-12" > 
  <table width="100%" border="1">
  <tr>
    <td>
    <table width="95%" border="1" align="center">
      <tr>
        <td  ><div align="center">จากวันที่ </div></td>
        <td > <div id='jqxdatetimeinput'></div></td>
        <td ><div align="center">ถึงวันที่</div></td>
        <td  ><div id='jqxdatetimeinput2'>
          <div align="center"></div></td>
        <td ><div align="center">
          <input id="getDateButton" type="button" value="ค้นหาข้อมูล"/>
        </div></td>
      </tr>
    </table>
      
      </td>
    </tr>
       
   
</table>
     
     
      <table width=" 100%" border="1">
        <tr>
          <td>
       
       <div class="row">
       <div class="col-md-6">
       <table width=" 100%" border="1"  >
        <tr>
          <td>
          
          <table width=" 95%" border="1" align="center">
        <tr>
          <td> 
     <div id='jqxgrid1' style="width:600px; height:310px;">
             </td>
        </tr>
       
   
</table>
          
             </td>
        </tr>
       
   
</table>
      </div>
       
      
      
       <div class="col-md-6">
        <table width=" 100%" border="1"  >
        <tr>
          <td>
          
          <table width=" 95%" border="1" align="center">
        <tr>
          <td>
           
            <div id='chartContainer' style="width:600px; height:310px;">
            
            
             </td>
        </tr>
       
   
</table>
          
             </td>
        </tr>
       
   
</table>
      </div>
      </div>
      </td>
        </tr>
        <tr>
          <td> 
          <div id='chartContainer2' style="width:600px; height:310px;">
      </td>
        </tr>
        <tr>
          <td>
          <div id='chartContainer3' style="width:600px; height:310px;">
           </td>
        </tr>
       
   
</table>
     <p align="left"class="loading"></p></p>
    <div align="center" id="ajax"></div>
    
   
</div>
</body>
</html>