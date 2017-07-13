 

<?php 



error_reporting(0);

//include_once 'db.php';

 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';
  

  $connect =connectToDB();


	 
	 

 
$query="


 
 INSERT INTO hi.job_nurse (job_nurse.id_job,job_nurse.job_date,job_nurse.job_time,job_nurse.idpm,job_nurse.nameidpm,job_nurse.job_total,type_job)


select
null,

DATE_FORMAT(NOW(),'%Y-%m-%d')  as job_date,
DATE_FORMAT(NOW(),'%H:%i:%s')  as job_time,
a.ward as  idpm ,
idpm.nameidpm,
sum(a.cns)  as job_total,
'1'
 
from(SELECT ipt.vn, 
	count(ipt.an) as cns, 
	ipt.hn, 
	ipt.rgtdate, 
	ipt.dchdate, 
	ipt.ward, 
	ipt.dchtype,
      ipt.an,
ipt.rgttime
FROM ipt
WHERE  ipt.dchdate ='0000-00-00' and
  ipt.dchtype in('0') and ipt.ward !=''
 and  DATE_FORMAT(ipt.rgtdate,'%Y') = DATE_FORMAT(NOW(),'%Y')
  and  DATE_FORMAT(ipt.rgtdate,'%m') between DATE_FORMAT(NOW(),'%m')-4 and  DATE_FORMAT(NOW(),'%m')
   
and DATE_FORMAT(ipt.rgtdate,'%d') between  DATE_FORMAT(ipt.rgtdate,'%d')-120   and   DATE_FORMAT(NOW(),'%d')  
GROUP BY ipt.an
 ) as a  
INNER JOIN idpm on idpm.idpm = a.ward  GROUP BY a.ward  
";
	  
	 
	
	
	
	
	
	
	
	
	
	 
	
	 
		 	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	 

	
	//while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	//	$data[] = array(
			 
				 
			  
				
		 
		        
		//		 'icd10'=>  iconv('TIS-620','UTF-8//IGNORE',$row['icd10']),
			//	  'icd10name'=> $row['icd10name'] ,
				  
		//		  'can'=> $row['can']  
		 
		 
		 
		 
		 
		//  );
	//}
	
  
//	$js11= json_encode($data);
	
//	echo  $js11; 
	
 echo "please wait while you are redirected"; 
  
   
   echo "<meta http-equiv='refresh' content='10; url=http://110.164.209.110/webhi/moniter/'>";

	
	
?>

 