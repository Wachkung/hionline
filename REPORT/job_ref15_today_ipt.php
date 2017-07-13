 

<?php 



error_reporting(0);

//include_once 'db.php';

 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';
  

  $connect =connectToDB();


	 
	 

 
$query="


 select
b.dchtime as icd10,
icd101.icd10name,
b.off_name1 as  can


from(SELECT
a.rfrlct,
hospcode.off_name1,
a.prediag,
a.rgttime,
a.dchtime
from
(SELECT ipt.vn, 
 
	ipt.ward, 
	ipt.dchtype, 
	ipt.an, 
	ipt.rgttime, 
	ipt.dchtime, 
	orfro.rfrlct, 
	ipt.prediag
FROM orfro RIGHT OUTER JOIN ipt ON orfro.vn = ipt.vn AND orfro.ward = ipt.ward AND orfro.an = ipt.an
WHERE ipt.dchdate =CURDATE() and
  ipt.dchtype ='4' and ipt.ward!='' 
 and ipt.dchtime BETWEEN '726' and '1525') as a 
 LEFT join hospcode ON hospcode.off_id= a.rfrlct) as b  INNER JOIN icd101 on icd101.icd10 =b.prediag
 
";
	  
	 
	
	
	
	
	
	
	
	
	
	 
	
	 
		 	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	 

	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$data[] = array(
			 
				 
			  
				
		 
				 'icd10'=>  iconv('TIS-620','UTF-8//IGNORE',$row['icd10']),
				
		          'icd10name'=> iconv('TIS-620','UTF-8//IGNORE',$row['icd10name']) ,
				  
				  'can'=>  iconv('TIS-620','UTF-8//IGNORE',$row['can'])  
		 
		 
		 
		 
		 
		  );
	}
	
  
	$js11= json_encode($data);
	
	echo  $js11; 
	
	
	
?>

 