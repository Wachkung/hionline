<?

	include("../includes/conndb.php"); 
	include("../includes/config.inc.php"); 
	
	
	?>
<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>โรงพยาบาลตาลสุม</li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 2-->
<!--End Dashboard 2-->

<!--Start Dashboard 3-->
<?	include("../includes/connriskdb.php"); 
?>
		<div id="dashboard-overview" class="row" style="visibility: visible; position: relative;">
 			<div id="ow-marketplace" class="col-sm-12 col-md-12">
					<tbody>
                            <div  class="alert alert-warning" role="alert">
                                <div class="alert alert-danger" role="alert" align="center">
                                    <h3 class="box-title">ข่าวประชาสัมพันธ์</h3>
                                </div><!-- /.box-header -->
                                        <?php    
											$no=1;
											$sql="SELECT * FROM	 dch.news WHERE dch.news.category ='1' order by dch.news.id DESC LIMIT 5 "; 
                        					$result = mysql_query($sql); while($data = mysql_fetch_array($result)) {
										?>
									 <div class="alert alert-info" role="alert">
										  <div class="alert alert-success" role="alert">
											<h3><?=$data['topic']?></h3>
											<p><?=$data['posted']?></p>
										  </div>
									</div><!-- /.box-body -->
								       <?php }   ?>
					</tbody>
			</div>
                            <div  class="alert alert-warning" role="alert">
                                <div class="alert alert-danger" role="alert">
                                    <h3 class="box-title">เอกสาร 20 อันดับล่าสุด</h3>
                                </div><!-- /.box-header -->
                                <div  class="alert alert-info" role="alert">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                            	<th width="8%">No.</th>
                                                <th width="42%">หัวข้อ</th>
                                                <th width="5%"><i class="fa fa-download"></i></th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   $total=0; $no=1;
											$sql=" SELECT * FROM	 dch.it_file_download  order by dch.it_file_download.dupdate DESC LIMIT 10"; 
                        					$result = mysql_query($sql); while($data = mysql_fetch_array($result)) {
											$total=$total+$data['price_repair'];	
											
										?>
                                            <tr class="alert alert-success" role="alert">
                                            	<td><?=$no?></td>
                                                <td><?=$data['file_title']?></td>
                                                <td><a href="/tsdch/IT/file_download/<?=$data['file_name']?>"  target="_blank"><i class="fa fa-download"></i></a></td>
                                            
                                            </tr>
                                        <?php  $no++;  } ?>
                                       
                                        </tbody>
                                    </table>                                    
                                </div><!-- /.box-body -->
                            </div><!-- /box box-solid box-primary -->


		</div>


<!--End Dashboard -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
// Array for random data for Sparkline
var sparkline_arr_1 = SparklineTestData();
var sparkline_arr_2 = SparklineTestData();
var sparkline_arr_3 = SparklineTestData();
$(document).ready(function() {
	// Make all JS-activity for dashboard
	DashboardTabChecker();
	// Load Knob plugin and run callback for draw Knob charts for dashboard(tab-servers)
	LoadKnobScripts(DrawKnobDashboard);
	// Load Sparkline plugin and run callback for draw Sparkline charts for dashboard(top of dashboard + plot in tables)
	LoadSparkLineScript(DrawSparklineDashboard);
	// Load Morris plugin and run callback for draw Morris charts for dashboard
	LoadMorrisScripts(MorrisDashboard);
	// Make beauty hover in table
	$("#ticker-table").beautyHover();
});
</script>