 

<?php 



error_reporting(0);


 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';

 $date1=$_POST['date'];
 $date2=$_POST['date2'];

		
		  $startDate = dateEnglish($date1);
          $endDate = dateEnglish($date2);


  $connect =connectToDB();


 
$query="  SELECT 
a.rate,
  (case rate when  80 then '1'  
	when  85 then '2'
	when  90 then '3' 
	when  95 then '4' 
	when  100 then '5' 
	else 'No data' end) as kpi,
a.cvn,
a.stat
FROM 
(SELECT 
SUM(if(ovstx.doseprn LIKE '%stat%',1,0))*100/COUNT(DISTINCT ovstx.vn) AS rate,
SUM(if(ovstx.doseprn LIKE '%stat%',1,0)) as stat,
COUNT(DISTINCT ovstx.vn) AS cvn,
ovstx.xdoseno,
ovstx.vstdttm,
ovstx.meditem,
ovstx.doseprn
FROM 

(SELECT ovst.vn, ovstdx.icd10, prscdt.medusage, prscdt.meditem, ovst.vstdttm, prscdt.xdoseno, xdose.doseprn FROM hi.ovst 
LEFT JOIN hi.ovstdx ON ovst.vn = ovstdx.vn 
LEFT JOIN hi.prsc on ovst.vn = prsc.vn 
LEFT JOIN hi.prscdt on prsc.prscno = prscdt.prscno 
LEFT JOIN hi.meditem ON prscdt.meditem = meditem.meditem
LEFT JOIN hi.xdose ON prscdt.xdoseno = xdose.xdoseno
WHERE  prscdt.meditem in ('59','61','6320','36421','36511') GROUP BY ovst.vn) AS ovstx


INNER JOIN  hi.grpkpi_icd10 ON ovstx.icd10 = grpkpi_icd10.`code`

WHERE DATE(ovstx.vstdttm) BETWEEN '$startDate' and '$endDate' AND grpkpi_icd10.type ='1') as a ";
	  
	
	
	 
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
