 

<?php 



error_reporting(0);

//include_once 'db.php';
//print_r($_POST//
 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';

 $date1=$_POST['date'];
 $date2=$_POST['date2'];
// if(isset($date)||isset($date2)) {
        
	// print_r($_POST);
 //}else {
//	 
//	 echo  "no";
	 
	 
	// }
	//	include_once 'db.php';
		
		     $startDate = dateEnglish($date1);
          $endDate = dateEnglish($date2);
    // echo $startDate;  ovst.vstdttm BETWEEN '2015-01-01' AND '2015-12-31'


  $connect =connectToDB();


	 
	/*$query = " select a.icd10,icd101.icd10name ,c5opd from(SELECT
ovstdx.icd10, 
 
Count(ovstdx.id) AS c5opd
FROM
ovst
INNER JOIN ovstdx ON ovstdx.vn = ovst.vn

WHERE
DATE_FORMAT(ovst.vstdttm,'%Y-%m-%d')  BETWEEN '2014-01-01' AND '2014-01-31'
group by ovstdx.icd10
order by c5opd  desc
limit 10) as a left JOIN icd101 ON icd101.icd10 =a.icd10  where a.icd10 NOT LIKE'Z%'or'X%'or'Y%' " */

 
$query=" SELECT a.rate,
  (case when rate > 1.25 then '1'  
	when rate between 1 and 1.25 then '2'
	when rate between 0.75 and 1 then '3' 
	when rate between 0.50 and 0.75 then '4' 
	when (rate <= 0.50 or rate is NULL) then '5' 
	else 'No data' end) as kpi
from 
(SELECT
if(count(distinct case when ipt.dchtype in ('8','9') then ipt.an end)*100 /count(distinct ipt.an)>0.01,count(distinct case when ipt.dchtype in ('8','9') then ipt.an end)*100 /count(distinct ipt.an),0) as rate,
ipt.hn,
ipt.an,
ioprt.icd9cm,
ioprt.icd9name,
grpkpi_icd10.type,
ipt.dchdate
FROM
ioprt
INNER JOIN grpkpi_icd10 ON ioprt.icd9cm = grpkpi_icd10.`code`
INNER JOIN ipt ON ipt.an = ioprt.an
where grpkpi_icd10.type ='3' and ipt.dchdate BETWEEN '$startDate' and '$endDate') as a  ";
	  

	 
	
	 
		 	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	 

	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$data[] = array(
			
			      
			//    'FNAME' => 
		 	    'rate'=>  iconv('TIS-620','UTF-8//IGNORE',$row['rate']) ,
                              'kpi' => $row['kpi'],
			      
		  );
	}
	
 //   $data[] = array(
   //    'TotalRows' => $total_rows,
	//   'Rows' => $dr
//	);
	$js1= json_encode($data);
	
	echo  $js1; 
	
	
	
?>

<?php
  /*  $resultpt10 = mysql_query($pt10) or die("SQL Error 1: " . mysql_error());
 	
 while ($row2 = mysql_fetch_array($resultpt10, MYSQL_ASSOC)) {
		$data[] = array(
			
			      'prediag' => $row2['prediag'],
			      'prename' => $row2['prename'] ,
			//    'FNAME' => 
		 	    'prediagc5opd'=>  iconv('TIS-620','UTF-8//IGNORE',$row2['prediagc5opd']) 
		  );
	}
	





 //   $data[] = array(
   //    'TotalRows' => $total_rows,
	//   'Rows' => $dr
//	);
	$js2 = json_encode($data);
  
 
 echo  $js2;
 
 
 
 
  
 
 
 */
 
 
 
 
 
 
 /*
echo  $mes;
if($mes!=''){
$query = mysql_query("INSERT INTO `mes` (id,mes,mes2) VALUES ('', '$mes','$mes2')") or die(mysql_error());
$newquery = mysql_query("SELECT * FROM mes order by id desc limit 1") or die(mysql_error());
	while($result = mysql_fetch_array($newquery)){ ?>
	<div class="div2" align="left" id="dd<?php echo $result['id'];?>"><div align="left"><div class="close" align="right"><a href="#" 		class="as" id="<?php echo $result['id'];?>">X</a></div><?php echo $result['mes'];?></div></div>
	<?php }
}  */
?>