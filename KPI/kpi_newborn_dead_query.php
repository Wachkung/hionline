 

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
  (case when rate > 8 then '1'  
	when rate between 7 and 8 then '2'
	when rate between 6 and 7 then '3' 
	when rate between 5 and 6 then '4' 
	when (rate <= 5 or rate is NULL) then '5' 
	else 'No data' end) as kpi
FROM 
(SELECT
count(distinct case when ipt.dchtype in ('8','9') then ipt.an end)*1000 /count(distinct ipt.an) as rate,
count(distinct ipt.an) as ratex,
ipt.dchdate
FROM
hi.ipt
INNER JOIN (SELECT pt.hn, pt.brthdate, pt.dthdate FROM hi.pt WHERE DATEDIFF(now(),pt.brthdate) = 28 ) as ptx  ON ipt.hn = ptx.hn
LEFT JOIN hi.ovst ON ipt.hn = ovst.hn
LEFT JOIN hi.orfri ON ovst.vn = orfri.vn
WHERE date(ipt.dchdate) BETWEEN '$startDate' and '$endDate'  AND orfri.vn IS NULL ) as a

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
	
	


 
?>