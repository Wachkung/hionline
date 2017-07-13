<!DOCTYPE html>
<html lang="en">
<head>
<title> ระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม </title>
    <meta name="description" content="This sample demonstrates how we can bind jQWidgets DataTable widget to JSON Data by using jQWidgets DataAdapter plugin.">
    <link rel="stylesheet" href="../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="../jqwidgets/jqxdatatable.js"></script> 
    <script type="text/javascript" src="../scripts/demos.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var url = "yearopd3.php";
            // prepare the data
            var source =
            {
                dataType: "json",
                dataFields: [
                    { name: 'yearvst', type: 'yearvst' },
                    { name: 'vn', type: 'string' } ,
                     { name: 'hn', type: 'string' } 


             
                ],
                id: 'id',
                url: url
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#dataTable").jqxDataTable(
            {
                width: 400,
                pageable: true,
                pagerButtonsCount: 10,
                source: dataAdapter,
                columnsResize: true,
                columns: [
                    { text: 'Name', dataField: 'yearvst', width: 200 },
                      { text: 'Beverage Type', dataField: 'vn', width: 100 },
					  { text: 'Beverage Type', dataField: 'hn', width: 100 }
              ]
            });
        });
    </script>
</head>
<body class='default'>
     <div id="dataTable"></div>
</body>
</html>