 

<?php 



error_reporting(0);

//include_once 'db.php';
//print_r($_POST//
 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';

 $date1=$_POST['date'];
 $date2=$_POST['date2'];

		  $startDate = dateEnglish($date1);
          $endDate = dateEnglish($date2);



  $connect =connectToDB();



 
$query=" SELECT 
a.rate,
  (case when rate > 0.04 then '1'  
	when rate between 0.03 and 0.04 then '2'
	when rate between 0.02 and 0.03 then '3' 
	when rate between 0.01 and 0.02 then '4' 
	when (rate <= 5 or rate is NULL) then '5' 
	else 'No data' end) as kpi
from 
(SELECT
count(distinct case when ipt.dchtype in ('8','9') then ipt.an end)*100 /count(distinct ipt.an) as rate,
ipt.hn,
ipt.an,
ipt.dchdate
FROM
ors
INNER JOIN ipt ON ors.hn = ipt.hn
INNER JOIN operation ON operation.orno = ors.orno
INNER JOIN optype_m ON optype_m.`code` = operation.opertype
where date(ipt.dchdate) BETWEEN '$startDate' and '$endDate' AND ors.optype = '1'  AND ors.orno > 0 AND optype_m.code = '1' ) as a 
";
	  

	 
	
	 
		 	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	 

	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$data[] = array(
			
			      
	
		 	    'rate'=>  iconv('TIS-620','UTF-8//IGNORE',$row['rate']) ,
                              'kpi' => $row['kpi'],
			      
		  );
	}
	

	$js1= json_encode($data);
	
	echo  $js1; 
	
	



	$js2 = json_encode($data);
  
 
 echo  $js2;

 
?>