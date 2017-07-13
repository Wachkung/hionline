<?
ob_start();
session_start();
header ('Content-type: text/html; charset=tis-620');
?>
<html>
    <head>
        <title> ÁReport HI Online ‚√ßæ¬“∫“≈µ“≈ ÿ¡</title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
        <meta name="description" content="description">
        <meta name="author" content="Risk">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <link href="./includes/plugins/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="./includes/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="./includes/bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="./includes/bootstrap/css/Righteous.css" rel="stylesheet" type="text/css">
        <link href="./includes/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="./includes/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
        <link href="./includes/plugins/xcharts/xcharts.min.css" rel="stylesheet">
        <link href="./includes/plugins/select2/select2.css" rel="stylesheet">
        <link href="./includes/bootstrap/css/style.css" rel="stylesheet">




        <style type="text/css">
            body{
                margin:0px auto;
                font-family: Arial,sans-serif;
                color: #333333;
                font-size:14px; 
                line-height: 1.166;	
                background-image: url(image/Background.png);
                -ms-text-align-last:center;

            }

            a{
                color: #006699;
                text-decoration: none;
            }

            a:link{
                color: #006699;
                text-decoration: none;
            }

            a:visited{
                color: #006699;
                text-decoration: none;
            }

            a:hover{
                color: #006699;
                text-decoration: underline;
            }

            h1{
                font-family: Verdana,Arial,sans-serif;
                font-size: 120%;
                color: #334d55;
                margin: 0px;
                padding: 0px;
            }

            h2{
                font-family: Arial,sans-serif;
                font-size: 100%;
                color: #006699;
                margin: 0px;
                padding: 5px 5px;

            }

            h3{
                font-family: Arial,sans-serif;
                font-size: 100%;
                color: #334d55;
                margin: 0px;

            }

            h4{
                font-family: Arial,sans-serif;
                font-size: 100%;
                font-weight: normal;
                color: #333333;
                margin: 0px;
                padding: 0px;
            }

            h5{
                font-family: Verdana,Arial,sans-serif;
                font-size: 100%;
                color: #334d55;
                margin: 0px;
                padding: 0px;
            }
            table, td, th
            {
                margin: 10px auto;
                border:0px dotted #5B7D9F;
                border-collapse:collapse;
                font-size:13px;
            }
            th
            {
                background-color:green;
                color:white;
            }
            td { padding:0px 0px 0px 20px;}

            #container { margin: 25px auto; width:1100px; height:565px; border:#FF0000 0px solid; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cce5fb', endColorstr='#ffffff'); /* for IE */
                         background: -webkit-gradient(linear, left top, left bottom, from(#cce5fb), to(#ffffff)); /* for webkit browsers */
                         background: -moz-linear-gradient(top,  #cce5fb,  #ffffff);
                         -moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px; 
                         -moz-box-shadow: 0 0 0 1px #cccccc;
                         -webkit-box-shadow: 0 0 0 1px #cccccc;
                         box-shadow:0px 5px 5px 5px #cccccc;  }
            #left { width:710px; height:400px; border:#F00 0px solid; float:left;  }
            #right{ width:380px; height:400px; border-left:#CCCCCC 0px solid; float:right; 
            }

            #loginform { margin:5px auto; width:370px; height:390px; border:#CCCCCC 0px solid;
            }



        </style>
    </head>
    <?
    include("log.php");

    ?>
    <body >
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center">
                    <div id="container">

                        <div class="container-fluid">
                            <div id="page-login" class="row">
                                <div class="col-xs-6 col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="box">                  
                                        <div class="box-content">
                                            <form  name="frmMain"  action="index.php?op=in" method="post" enctype="multipart/form-data" onSubmit="JavaScript:return validate();">
                                                <div class="text-center">
                                                    <h3 class="page-header">HI ONLINE ‚√ßæ¬“∫“≈µ“≈ ÿ¡</h3>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control" name="userid" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="psw" />
                                                </div>


                                                <div class="text-center">
                                                    <input type="submit" class="btn btn-primary" value="µ°≈ß">

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?   include "footer.php"; ?>
                    </div>
                </td>
            </tr>
            <tr>
            </tr>
        </table>
    </body>
</html>