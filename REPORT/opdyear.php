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

 
  

           <script type="text/javascript">
        $(document).ready(function () {
            var url = "yearopd31.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'yearvst', type: 'yearvst' },
                    { name: 'vn', type: 'string' } ,
                     { name: 'hn', type: 'string' } 
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#jqxgrid").jqxGrid(
            {
                width: 460,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
			   
			   
			    columns: [
                  { text: 'ปี', dataField: 'yearvst', width: 200 },
                      { text: 'ครั้ง', dataField: 'vn', width: 130 },
					  { text: 'คน', dataField: 'hn', width: 130 }
                ]
            });
      
	  
	   $(document).ready(function () {
            var url = "dttsum.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'yearvst', type: 'yearvst' },
                    { name: 'vn', type: 'string' } ,
                     { name: 'hn', type: 'string' } 
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#jqxgrid1").jqxGrid(
            {
                width: 460,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
			   
			   
			    columns: [
                  { text: 'ปี', dataField: 'yearvst', width: 200 },
                      { text: 'ครั้ง', dataField: 'vn', width: 130 },
					  { text: 'คน', dataField: 'hn', width: 130 }
                ]
            });
        });
	  
	  
	  
	  
	  $(document).ready(function () {
            var url = "iptsum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'yearvst', type: 'yearvst' },
                    { name: 'vn', type: 'string' } ,
                     { name: 'hn', type: 'string' } 
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#jqxgrid3").jqxGrid(
            {
                width: 450,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
			   
			   
			    columns: [
                  { text: 'ปี', dataField: 'yearvst', width: 200 },
                      { text: 'ครั้ง', dataField: 'vn', width: 125 },
					  { text: 'คน', dataField: 'hn', width: 125 }
                ]
            });
        });
	  
	  
	  $(document).ready(function () {
            var url = "depsum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     {name: 'cln', type: 'string' },
					 { name: 'namecln', type: 'string' },
                    { name: '2011a', type: 'string' } ,
                     { name: '2011b', type: 'string' } ,
                    { name: '2012a', type: 'string' } ,
                     { name: '2012b', type: 'string' } ,
              
			  		{ name: '2013a', type: 'string' } ,
                     { name: '2013b', type: 'string' } ,
                    { name: '2014a', type: 'string' } ,
                     { name: '2014b', type: 'string' }  
              
		   
			  
			  
			  
			    ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#jqxgrid4").jqxGrid(
            {
                width: 950,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
			   
			   
			    columns: [
                     { text: 'รหัสหน่วยงาน', dataField: 'cln', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'namecln', width: 250},
					  { text: '2011คน', dataField: '2011b', width: 70 },
                       { text: '2011ครั้ง', dataField: '2011a', width: 70 },
			  
			           { text: '2012คน', dataField: '2012b', width: 70 },
                       { text: '2012ครั้ง', dataField: '2012a', width: 70 },
					   
					    { text: '2013คน', dataField: '2013b', width: 70 },
                       { text: '2013ครั้ง', dataField: '2013a', width: 70 },
					    { text: '2014คน', dataField: '2014b', width: 70 },
                       { text: '2014ครั้ง', dataField: '2014a', width: 70 }
					   
			  
			    ]
            });
        });
	  
	  
	  
	  $(document).ready(function () {
            var url = "ssoum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'yearvst', type: 'string' },
                    { name: 'vn', type: 'string' }    ,
					 
                        { name: 'hn', type: 'string' }  
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#avagebed1").jqxGrid(
            {
                width: 450,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'ปี', dataField: 'yearvst', width: 200 },
                      { text: 'คน', dataField: 'hn', width: 100 },
					  
					     { text: 'ครั้ง', dataField: 'vn', width: 100 }
                ]
            });
        });
	  
	  
	  
	   $(document).ready(function () {
            var url = "wardsum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'ward', type: 'string' },
                    { name: 'nameidpm', type: 'string' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#referward3").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'ward', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'nameidpm', width: 300 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	  
	  $(document).ready(function () {
            var url = "lrsum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'lr', type: 'string' },
                    
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#lrsum3").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  
                      { text: 'ชื่อหน่วยงาน', dataField: 'lr', width: 400 },
					  
					     { text: 'คน', dataField: 'aaa', width: 100 },
						   { text: 'คน', dataField: 'bbb', width: 100 },
						   { text: 'คน', dataField: 'ccc', width: 100 },
						   { text: 'คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	   $(document).ready(function () {
            var url = "lrsum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'lr', type: 'string' },
                    
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#lrsum3").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  
                      { text: 'ชื่อหน่วยงาน', dataField: 'lr', width: 400 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	 
	  
	  $(document).ready(function () {
            var url = "orssum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'ward', type: 'string' },
                    { name: 'nameidpm', type: 'nameidpm' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#orssum3").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'ward', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'nameidpm', width: 300 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	  
	  $(document).ready(function () {
            var url = "iptpttypesum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'pttype', type: 'string' },
                    { name: 'namepttype', type: 'namepttype' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#iptpttypesum3").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'pttype', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'namepttype', width: 300 },
					  
					     { text: 'คน', dataField: 'aaa', width: 100 },
						   { text: 'คน', dataField: 'bbb', width: 100 },
						   { text: 'คน', dataField: 'ccc', width: 100 },
						   { text: 'คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	  
	  
	  $(document).ready(function () {
            var url = "opdpttypesum3.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'inscl', type: 'string' },
                    { name: 'namepttype', type: 'namepttype' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#opdpttypesum3").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'inscl', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'namepttype', width: 300 },
					  
					     { text: 'คน', dataField: 'aaa', width: 100 },
						   { text: 'คน', dataField: 'bbb', width: 100 },
						   { text: 'คน', dataField: 'ccc', width: 100 },
						   { text: 'คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	    
	  $(document).ready(function () {
            var url = "reciverefer.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'rfrlct', type: 'string' },
                    { name: 'off_name1', type: 'string' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#reciverefer").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'rfrlct', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'off_name1', width: 300 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	     
	  $(document).ready(function () {
            var url = "outrefer.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'rfrlct', type: 'string' },
                    { name: 'off_name1', type: 'string' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#outrefer").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'rfrlct', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'off_name1', width: 300 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	  
	  
	  $(document).ready(function () {
            var url = "stationreferout.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'rfrlct', type: 'string' },
                    { name: 'off_name1', type: 'string' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#stationreferout").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'rfrlct', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'off_name1', width: 300 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	  
	  
	   $(document).ready(function () {
            var url = "resultreferout.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'rfrcs', type: 'string' },
                    { name: 'namerfrcs', type: 'string' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#resultreferout").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'rfrcs', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'namerfrcs', width: 300 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	  
	  
	   $(document).ready(function () {
            var url = "namereferout.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'ward', type: 'string' },
                    { name: 'nameidpm', type: 'string' }    ,
					 
                        { name: 'dchdate', type: 'string' }  ,
						 { name: 'hn', type: 'string' }  ,
						 { name: 'pttype', type: 'string' }  ,
						 { name: 'icd10', type: 'string' }  ,
						 
						  { name: 'icd10name', type: 'string' }  ,
						 { name: 'namerfrcs', type: 'string' }  
						 
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#namereferout").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'ward', width: 100 },
                      { text: 'ตึก', dataField: 'nameidpm', width: 300 },
					  
					     { text: 'วันที่REFER', dataField: 'dchdate', width: 100 },
						   { text: 'HN', dataField: 'hn', width: 100 },
						   { text: 'สิทธิ์', dataField: 'pttype', width: 100 },
						   { text: 'รหัสโรค', dataField: 'icd10', width: 100 },
						    { text: 'ชื่อโรค', dataField: 'icd10name', width: 100 },
						   { text: 'สถานที่ REFER ไป', dataField: 'namerfrcs', width: 100 }
						   
						   
						   
						 
                ]
            });
        });
	  
	  
	    
	  
	   $(document).ready(function () {
            var url = "clnreferout1.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'cln', type: 'string' },
                    { name: 'namecln', type: 'string' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#clnreferout1").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'cln', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'namecln', width: 300 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	  
	  
	   $(document).ready(function () {
            var url = "referincln.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                     { name: 'cln', type: 'string' },
                    { name: 'namecln', type: 'string' }    ,
					 
                        { name: 'aaa', type: 'string' }  ,
						 { name: 'bbb', type: 'string' }  ,
						 { name: 'ccc', type: 'string' }  ,
						 { name: 'ddd', type: 'string' }  
						
                ],
               
                url: url,
                root: 'data'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#referincln").jqxGrid(
            {
                width: 880,
                source: dataAdapter,
                columnsresize: true,
                  autorowheight: true,
                autoheight: true,
                altrows: true,
				
				columns: [
                  { text: 'รหัสหน่วยงาน', dataField: 'cln', width: 100 },
                      { text: 'ชื่อหน่วยงาน', dataField: 'namecln', width: 300 },
					  
					     { text: '2011คน', dataField: 'aaa', width: 100 },
						   { text: '2012คน', dataField: 'bbb', width: 100 },
						   { text: '2013คน', dataField: 'ccc', width: 100 },
						   { text: '2014คน', dataField: 'ddd', width: 100 }
						 
                ]
            });
        });
	  
	
	  
	  
	  
	    });
    </script>

 

                       

        <!-- Navigation -->
      
         	<?php include_once ('menu.php'); ?> 
        
            
            <!-- /.navbar-header -->

       


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 btn btn-primary">
                    <h1>ระบบรายงาน 3ปี ย้อนหลังตามปีงบประมาณ</h1>
                </div>
            
                     
                
                
                
                <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            รายงานผู้ป่วยนอก
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                   
                                   <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
                                 <div id="jqxgrid"></div>
                                       </div>
                                       
                                     
                                     
                                     
                                </div>
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            รายงานผู้ป่วยทันตกรรม
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-pills">
                                     
                                     <div id="jqxgrid1"></div> 
                                </div>
                                 
                                 
                                 
                                 
                                 
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="well">
                        <h4>รายงานผู้ป่วยใน</h4>
                         <div id="jqxgrid3"></div> 
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-6">
                    <div class="well well-lg">
                        <h4>รายงานประกันสังคม</h4>
                         <div id="avagebed1"></div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                 
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานผู้ป่วยนอกแยกตามแผนก</h3>
                          <div id="jqxgrid4"></div> 
                    </div>
                
             
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h4>รายงานส่งผู้ป่วยในรักษาต่อ REFER แยกตามตึก(ไม่นับผู้ป่วยที่ส่งไป XRY หรืออื่น ที่กลับมารักษา referward3  )</h3>
                          <div id="referward3"></div> 
                    </div>
                    
                    
                    
                     <div class="col-lg-12">
                    <div class="jumbotron">
                        <h4>รายงานส่งผู้ป่วยในรักษาต่อ REFER ตาม สถานบริการ  (ข้อมูลไม่ตรงกันจากไม่ระบุสถานบริการที่ส่ง stationreferout  )</h3>
                          <div id="stationreferout"></div> 
                    </div>
                    
                     <div class="col-lg-12">
                    <div class="jumbotron">
                        <h4>รายงานส่งผู้ป่วยในรักษาต่อ REFER ตาม  เหตุผล  (ข้อมูลไม่ตรงกันจากไม่ระบุเหตุผลที่ส่ง resultreferout  )</h3>
                          <div id="resultreferout"></div> 
                    </div>
                    
                       
                 
                    
                    
                    
                    
                
                 <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานรับ REFER ตามสถานบริการ</h3>
                          <div id="reciverefer"></div> 
                    </div>
               
               <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานผู้ป่วยนอก ส่ง REFER ตามสถานบริการ (outrefer)</h3>
                          <div id="outrefer"></div> 
                    </div>
               
              
                
               <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานผู้ป่วยนอก ส่ง REFER ตามคลีนิค(clnreferout)</h3>
                          <div id="clnreferout1"></div> 
                    </div>
              
                 
               <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานผู้ป่วยนอก รับ REFER ตามคลีนิค(clnreferout)</h3>
                          <div id="referincln"></div> 
                    </div>
              
              
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานผู้ป่วยในห้องคลอด  แม่ </h3>
                          <div id="lrsum3"></div> 
                    </div>
                
            
                
               <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานการผ่าตัด 3  ปี ย้อนหลัง</h3>
                          <div id="orssum3"></div> 
                    </div>
               <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานการสิทธิ์ ผู้ป่วยใน 3  ปี ย้อนหลัง</h3>
                          <div id="iptpttypesum3"></div> 
                    </div>
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>รายงานการสิทธิ์ ผู้ป่วยใน 3  ปี ย้อนหลัง</h3>
                          <div id="opdpttypesum3"></div> 
                    </div>
               
                
               
                
                
                <!-- /.col-lg-12 -->
               
                
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
   

                
    <!-- Bootstrap Core JavaScript -->
  
    
    
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

</body>

</html>

