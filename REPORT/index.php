<!DOCTYPE html>
<html lang="en">
<head>
<title> ระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม </title>
         <meta http-equiv="Content-Type" content="text/html;  charset=utf-8 "> 
<head>
<link rel="stylesheet" href="../sample/ ../jqw/styles/jqx.base.css" type="text/css"/>
 <script type="text/javascript" src="../js/cdn/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../jqw/jqxcore.js"></script>
<script type="text/javascript" src="../jqw/jqxdatetimeinput.js"></script>
<script type="text/javascript" src="../jqw/jqxcalendar.js"></script>
<script type="text/javascript" src="../jqw/jqxtooltip.js"></script>
<script type="text/javascript" src="../jqw/jqxbuttons.js"></script>
<script type="text/javascript" src="../jqw/globalization/globalize.js"></script>


    <link rel="stylesheet" href="../jqw/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="../jqw/styles/jqx.summer.css" type="text/css" />
    <link rel="stylesheet" 
    href="../jqw/styles/jqx.darkblue.css" type="text/css" />

<script type="text/javascript" src="../jqw/jqxdata.js"></script>



 
    <script type="text/javascript" src="../jqw/jqxmenu.js"></script>


	 
   <?php  ################# boostrap?>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">      <?php // <-------- รองรับจอ ขนาดเล็ก    -->  ?>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
 
  <script type="text/javascript" src="../jqw/jqxdraw.js"></script>
    <script type="text/javascript" src="../jqw/jqxchart.core.js"></script>
    <script type="text/javascript" src="../jqw/jqxbuttons.js"></script>
    <script type="text/javascript" src="../jqw/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../jqw/jqxmenu.js"></script>
    <script type="text/javascript" src="../jqw/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../jqw/jqxlistbox.js"></script>
    <script type="text/javascript" src="../jqw/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../jqw/jqxgrid.js"></script>
    <script type="text/javascript" src="../jqw/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="../jqw/jqxgrid.selection.js"></script>	
    <script type="text/javascript" src="../jqw/jqxgrid.sort.js"></script>		
    <script type="text/javascript" src="../jqw/jqxdata.js"></script>	
     <!-----  calenda-->

	<link rel="stylesheet" type="text/css" href="../css/screen.css" media="screen" />

<script type="text/javascript" src="../js/cdn/generatedata.js"></script>
 <script type="text/javascript" src="../jqw/jqxdata.export.js"></script> 
    <script type="text/javascript" src="../jqw/jqxgrid.export.js"></script> 
<script type="text/javascript" src="../jqw/jqxgrid.columnsresize.js"></script> 
<style type="text/css">
       /*table {
            font-family: verdana,arial,sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #666666;
            border-collapse: collapse;
        }
            table th {
                border-width: 0px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #dedede;
            }
            table td {
                border-width: 0px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #ffffff;
            }  */
    </style>
 </head>
<body>
<div id='content'>
     
  
      <script type="text/javascript">
      $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 //	alert (date);
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
/*			 				var error = [];
error.push('Error 1');
error.push('Error 2');
		$('.errors').html(
    error.join('<br/>') // "Error 1<br/>Error 2"
);	 
		
	*/	
		
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'icd10' },
					 { name: 'icd10name' } ,
				 	 { name: 'c5opd' } ,
		 
					
			 
                ],
				
			 	   
				
				
                     type: "POST",
				  
				   url: "opd10.php",
                    
				  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			 
			
			
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#jqxgrid1").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                  { text: 'icd10', datafield: 'icd10', width: 50 },
                  { text: 'icd10name', datafield: 'icd10name', width: 350 },
                  { text: 'c5opd', datafield: 'c5opd', width: 50 } 
                 
              
			 
			 
			 
			 
			    ]
            });
			  var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		
		
          var settings = {
                title: "ผู้ป่วยนอก",
                description: "",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
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
                            columnsGapPercent: 20,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 300,
                                displayValueAxis: true,
                                description: 'จำนวน'
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
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: '% of GDP)'
                            },
                            series: [
                                    { dataField: 'c5opd', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };
			
			$('#chartContainer').jqxChart(settings);
			$("#excelExport").jqxButton({ theme: theme });
		
		$("#excelExport").click(function () {
                $("#jqxgrid1").jqxGrid('exportdata', 'xls', 'jqxGrid');           
            });
			
		   
           
		        
			  
		}
		
		
		
		
		
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
   
   
    
   
   
   
   
  </script>  
  
      
         <script type="text/javascript">
     $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'prediag' },
					 { name: 'prename' } ,
				 	 { name: 'prediagc5opd' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "ipt10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#iptgrid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'prediag', datafield: 'prediag', width: 50 },
                  { text: 'prename', datafield: 'prename', width: 350 },
                  { text: 'prediagc5opd', datafield: 'prediagc5opd', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "ผู้ป่วยใน",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'prediag',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'prediagc5opd', displayText: 'prediag'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'prediagc5opd', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartipt').jqxChart(settings);
		
		
		
		
		
		
		
		
		
		
		
		 
		});//จบการส่งข้อมูล

	        
	   
	     });
  
   
  
    
   
   
   
   
  </script> 
  
  
  
      
           <script type="text/javascript">
     
      
        $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'soicd10' },
					 { name: 'soname' } ,
				 	 { name: 'countso' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "so10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#so10grid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'soicd10', datafield: 'soicd10', width: 50 },
                  { text: 'soname', datafield: 'soname', width: 350 },
                  { text: 'countso', datafield: 'countso', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "ประกันสังคม",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'soicd10',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'countso', displayText: 'soicd10'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'countso', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartso').jqxChart(settings);
		
		<!------refer  -->
		
		
		
		
		
		
		
		
		
		
	<!--	$("#excelExport2").jqxButton({ theme: theme }); -->
	  
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
   
  
    
   
   
          
        
  
  
 
  
  
    </script>
      
      
      
         <!--refer  -->    
      
      
          <script type="text/javascript">
     
      
        $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'cln' },
					 { name: 'namecln' } ,
				 	 { name: 'cvn' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "refer10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#refer10grid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'cln', datafield: 'cln', width: 50 },
                  { text: 'namecln', datafield: 'namecln', width: 350 },
                  { text: 'cvn', datafield: 'cvn', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "REFER",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'cln',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'cvn', displayText: 'cln'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'cvn', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartrefer').jqxChart(settings);
		
		<!------refer  -->
		
		
		
		
		
		
		
		
		
		
	<!--	$("#excelExport2").jqxButton({ theme: theme }); -->
	  
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
  
  
    </script>
     <!----refer ward   -->
           <script type="text/javascript">
     
      
        $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'ward' },
					 { name: 'nameward' } ,
				 	 { name: 'cvnward' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "referward10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#referward10grid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'ward', datafield: 'ward', width: 50 },
                  { text: 'nameward', datafield: 'nameward', width: 350 },
                  { text: 'cvnward', datafield: 'cvnward', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "REFER_WARD",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'ward',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'cvnward', displayText: 'ward'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'cvnward', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartreferward').jqxChart(settings);
		
		<!------refer  -->
		
		
		
		
		
		
		
		
		
		
	<!--	$("#excelExport2").jqxButton({ theme: theme }); -->
	  
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
  
  
    </script>
  
  
  <!-- medwm10   -->
  
  
       <script type="text/javascript">
     
      
        $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'prediag' },
					 { name: 'medman' } ,
				 	 { name: 'cdiag' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "medwm10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#med10grid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'prediag', datafield: 'prediag', width: 50 },
                  { text: 'medman', datafield: 'medman', width: 350 },
                  { text: 'cdiag', datafield: 'cdiag', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "TOP10 MED",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'prediag',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'prediag'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartremed').jqxChart(settings);
		
		<!------refer  -->
		
		
		
		
		
		
		
		
		
		
	<!--	$("#excelExport2").jqxButton({ theme: theme }); -->
	  
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
  
  
    </script>
  
  
  
  
  
  
  
  
   <!-- gensur10   -->
    <script type="text/javascript">
     
      
        $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'prediag' },
					 { name: 'medman' } ,
				 	 { name: 'cdiag' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "gensur10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#gensurgrid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'prediag', datafield: 'prediag', width: 50 },
                  { text: 'medman', datafield: 'medman', width: 350 },
                  { text: 'cdiag', datafield: 'cdiag', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "ศัลยกรรมทั่วไป",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'prediag',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'prediag'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartgensur').jqxChart(settings);
		
		<!------refer  -->
		
		
		
		
		
		
		
		
		
		
	<!--	$("#excelExport2").jqxButton({ theme: theme }); -->
	  
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
  
  
    </script>
  <!---  ortho    -->
     <script type="text/javascript">
     
      
        $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'prediag' },
					 { name: 'medman' } ,
				 	 { name: 'cdiag' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "orthosur10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#orthosurgrid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'prediag', datafield: 'prediag', width: 50 },
                  { text: 'medman', datafield: 'medman', width: 350 },
                  { text: 'cdiag', datafield: 'cdiag', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "ศัลยกรรมกระดูก",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'prediag',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'prediag'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartgenortho').jqxChart(settings);
		
		<!------refer  -->
		
		
		
		
		
		
		
		
		
		
	<!--	$("#excelExport2").jqxButton({ theme: theme }); -->
	  
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
  
  
    </script>
  
  
   <!---  ped   -->
   
     <script type="text/javascript">
     
      
        $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'prediag' },
					 { name: 'medman' } ,
				 	 { name: 'cdiag' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "ped10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#pedgrid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'prediag', datafield: 'prediag', width: 50 },
                  { text: 'medman', datafield: 'medman', width: 350 },
                  { text: 'cdiag', datafield: 'cdiag', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "เด็ก",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'prediag',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'prediag'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartped').jqxChart(settings);
		
		<!------refer  -->
		
		
		
		
		
		
		
		
		
		
	<!--	$("#excelExport2").jqxButton({ theme: theme }); -->
	  
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
  
  
    </script>
    
   <!--GYN    -->
   
   
     <script type="text/javascript">
     
      
        $(document).ready(function () {
          $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' });
           
        
		
		
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
		
		   $("#getDateButton").click(function () {
                     var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                     var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	 
		   
			  
			  
			//   $.ajax({
		 
		//  success: function(html)
			   var data = generatedata(100);
			 
			 
		{
			 var theme = 'classic';
            var source =
            {     
			
			  
                
                datatype: "json",
                datafields: [
					 { name: 'prediag' },
					 { name: 'medman' } ,
				 	 { name: 'cdiag' } ,
		 
			 
                ],
                     type: "POST",
				  
				   url: "gyn10.php",
                  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		 
			   
		 
             }; 
			
			
			
            
           var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#gyngrid").jqxGrid(
            {
                width: 450,
                source: dataAdapter,                
                altrows: true,
                sortable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
                   { text: 'prediag', datafield: 'prediag', width: 50 },
                  { text: 'medman', datafield: 'medman', width: 350 },
                  { text: 'cdiag', datafield: 'cdiag', width: 50 },
                 
                ]
            });
     
		 
           
		 
		}
		
		
		var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error);} }); 
           
		   
		   //  var dataadapter = new $.jqx.dataAdapter(source);
		   
		 //  alert(dataAdapter);
		   
		    // prepare jqxChart settings
          var settings = {
                title: "สูตินารีเวช",
                description: " ",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 5, top: 0, right: 5, bottom: 0 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 1 },
                source: dataAdapter,
                categoryAxis:
                    {
                        dataField: 'prediag',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 1,
                         //  columns: 50,
						    valueAxis:
                            {
                                unitInterval: 100,
                                displayValueAxis: true,
                                description: 'จำนวน '
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'prediag'},
                                  //  { dataField: 'c5opd', displayText: 'icd10' }
                                ]
                        },
                        {
                            type: 'line',
                            valueAxis:
                            {
                                unitInterval: 5,
                                displayValueAxis: false,
                                description: 'Debt (% of GDP)'
                            },
                            series: [
                                    { dataField: 'cdiag', displayText: 'จำนวน', opacity:0.2 }
                                ]
                        }

                    ]
           
		   
		   
		   
		    };

		
		   $('#chartgyn').jqxChart(settings);
		
		<!------refer  -->
		
		
		
		
		
		
		
		
		
		
	<!--	$("#excelExport2").jqxButton({ theme: theme }); -->
	  
		
		});//จบการส่งข้อมูล

	        
	   
	     });
  
  
  
    </script>
   
   
   
   
   <!---   -->
    
   
  
      <script type="text/javascript">
            $(document).ready(function () {
                // Create a jqxMenu
              $("#jqxMenu").jqxMenu({ height: 40, theme: 'summer'});
            });
        </script>
      <script type="text/javascript">
            $(document).ready(function () {
                // Create a jqxMenu
                $("#verMenu").jqxMenu({ width: '280', mode: 'vertical'});
                $("#verMenu").css('visibility', 'visible');
            });
        </script>
      
      <!----  MENU -->
      <div class="breadcrumb" >
           <div id='content'>
      
 <div id='jqxWidget'>
            <div id='jqxMenu'>
                <ul>
                    <li><a href="../index.php">หน้าหลัก</a></li>
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
	 <table width="100%" border="0" >
  <tr>
    <td class="btn-info"  align="center">รายงานผู้ป่วยนอก</td>
  </tr>
</table>
 


</div>  
			<!-- Column 1 head -->
<div class="colmask leftmenu">
	<div class="colleft">
		<div class="col1">
			<!-- Column 1 start -->
			<table width="100%" border="1">
  <tr>
    <td class="btn-primary"><table width="70%" border="1" align="center">
      <tr class="alert-success">
        <td class="alert-error"  ><div align="center">จากวันที่ </div></td>
        <td > <div id='jqxdatetimeinput'></div></td>
        <td class="alert-error"  ><div align="center">ถึงวันที่</div></td>
        <td  ><div id='jqxdatetimeinput2'>
          <div align="center"></div></td>
        <td ><div align="center">
          <input id="getDateButton" type="button" value="ค้นหาข้อมูล"/>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td  class="btn-info"  align="center"><div >
            <div style='float: right;'>
                <input class="alert-success" type="button" value="Export to Excel" id='excelExport' />
                
            </div>รายงานผู้ป่วยนอก</td>
  </tr>
</table>



<table width="100%" border="1">
  <tr>
    
     <td>&nbsp;<div id='chartContainer' style="width:550px; height:462px;"></td>
    <td>&nbsp;<div id='jqxgrid1' style="width:380px; height:430px; "></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td class="btn-info" align="center"> รายงานผู้ป่วยใน</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartipt' style="width:550px; height:462px;"></td>
     <td>  <div id='iptgrid' style="width:380px; height:430px; "></td>
  </tr>
</table>



<table width="100%" border="1">
  <tr>
    <td class="btn-info"  align="center"> ประกันสังคม</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartso' style="width:550px; height:462px;"></td>
     <td>  <div id='so10grid' style="width:380px; height:430px; "></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td  class="btn-info" align="center"> REFER_OPD</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartrefer' style="width:550px; height:462px;"></td>
     <td>  <div id='refer10grid' style="width:380px; height:430px; "></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td class="btn-info"  align="center"> REFER_WARD</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartreferward' style="width:550px; height:462px;"></td>
     <td>  <div id='referward10grid' style="width:380px; height:430px; "></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td  class="btn-info" align="center">TOP10 MED</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartremed' style="width:550px; height:462px;"></td>
     <td>  <div id='med10grid' style="width:380px; height:430px; "></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td  class="btn-info" align="center">ศัลยกรรมทั่วไป</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartgensur' style="width:550px; height:462px;"></td>
     <td>  <div id='gensurgrid' style="width:380px; height:430px; "></td>
  </tr>
</table>



<table width="100%" border="1">
  <tr>
    <td  class="btn-info" align="center">ศัลยกรรมกระดูก</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartgenortho' style="width:550px; height:462px;"></td>
     <td>  <div id='orthosurgrid' style="width:380px; height:430px; "></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td class="btn-info"  align="center">เด็ก</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartped' style="width:550px; height:462px;"></td>
     <td>  <div id='pedgrid' style="width:380px; height:430px; "></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td class="btn-info"  align="center">สููตินารีเวช</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>   <div id='chartgyn' style="width:550px; height:462px;"></td>
     <td>  <div id='gyngrid' style="width:380px; height:430px; "></td>
  </tr>
</table>




			<!-- Column 1 end TOP10 MED-->
		</div>
		<div class="col2">
			<!-- Column 2 start -->
			<table width="100%" border="1">
  <tr>
    <td> <div id='verMenu' style="visibility: hidden;">
                <ul>
                    <li><a href="#">รายงาน 10 อันดับตามงาน</a></li>
                    <li>ผู้ป่วยนอกผู้ป่วยใน</li>
                        
                           
                            
                    <li>ศัลยกรรม</li>
                        
                   
                    <li>สููติกรรม</li>
                        
                            
                            <li><a href="#">ประกันสังถม</a></li>
                                 
                            
                            <li><a href="#">แพทย์แผนไทย</a></li>
                            <li><a href="#">ช้นสูติ</a></li>
                            <li><a href="#">เด็ก</a></li>
                       
                    
                    <li><a href="#">อายุรกรรม</a></li>
                    <li><a href="#">วิสัญญี่</a></li>
                    <li><a href="#">โรคเรื้อรัง</a></li>
                    <li><a href="#">refer</a>  </li>
                        
                  
                </ul>
            </div>
        </div>
    </div></td>

  </tr>
</table> 
 
 

			<!-- Column 2 end -->
		</div>
	</div>
</div>
<div id="footer">
	<table width="100%" border="0">
  <tr>
    <td>@it warinchamprap   hospital   </td>
  </tr>
</table>
<p align="left"class="loading"></p></p>
      <div align="center" id="ajax"></div>
</div>
     

</body>
</html>