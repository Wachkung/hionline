<!DOCTYPE html>
<html lang="en">
<head>
<title> ระบบบริการสุขภาพ ON LINE โรงพยาบาลตาลสุม </title>
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
    <script type="text/javascript" src="../scripts/demos.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var url = "yearopd3.php";
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
                width: 850,
                source: dataAdapter,
                columnsresize: true,
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
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div id="jqxgrid"></div>
    </div>
</body>
</html>