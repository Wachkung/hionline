<?

session_start();
	include("../config/connect.php"); 
	include("../config/config.php"); 
	include("../includes/config.inc.php"); 
	
//	$IDCARD1=$_SESSION["IDCARD"];
	$Username=$_SESSION["Username"];
	if($_SESSION['ADMIN'] <> "1")
	{   
		echo "<meta charset='UTF-8'>";
		echo "��ͧ�������к���͹��Ѻ!";
		echo"<meta http-equiv='refresh' content='2;URL=../index.php'>";
		exit();
	}
	


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>�к��Ѵ��çҹ���ʹ�� �ç��Һ��</title>

		<? include "../includes/linkcss.php";?>

    </head>
    <? include "navigator.php";?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        ��§ҹ�Է�ԡ����Ҷ֧������
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">�Է�ԡ����Ҷ֧������</h3>
                                </div><!-- /.box-header -->

								 <div class="box-body">
                                    <div class="form-group">
                                    <button type="button" class="btn btn-success" 
                                    onclick="window.location.href='user_add.php'">
                                    <i class="fa fa-plus"></i> �����Է�ԡ����Ҷ֧������ ����</button>	
                                    </div><!-- /.form group -->
                                </div>

                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"align="center">No.</th>
                                                <th width="20%"align="center">Username</th>  
												<th width="20%"align="center">����-ʡ��/����/˹��§ҹ</th>
                                                <th width="5%"align="center">ADMIN</th>
                                                <th width="5%"align="center">SERVICE</th>
                                                <th width="5%"align="center">REPORT</th>
                                                <th width="5%"><i class="fa fa-edit"></i></th>
                                                <th width="5%"><i class="fa fa-trash-o"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?  
											$total=0; $no=1;
											$sql="SELECT * FROM hionline.tabeluser "; 

                        					$result = mysql_query($sql); while($data = mysql_fetch_array($result)) {


										?>
                                            <tr>
                                            	<td align="center"><?=$no?></td>
                                                <td><?=$data['Username']?></td>
                                                <td><?=$data['Name']?></td>
                                                <td align="center"><?=$data['ADMIN']?></td>
                                                <td align="center"><?=$data['SERVICE']?></td>
                                                <td align="center"><?=$data['REPORT']?></td>
                                                <th><a href="user_edit.php?id=<?=$data['id']?>" onclick="return confirm('����������');" >
                                                <i class="fa fa-edit"></i></a></th>
                                                <th><a href="user_delete.php?id=<?=$data['id']?>" onclick="return confirm('ź�������������');" >
                                                <i class="fa fa-trash-o"></i></a></th>
                                            </tr>
                                        <? $no++; } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

    </body>
</html>
