 

<?php 



error_reporting(0);

//include_once 'db.php';

 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';

 $date=$_POST['date'];
 $date2=$_POST['date2'];
// if(isset($date)||isset($date2)) {
        
	//  print_r($_POST);
 //}else {
//	 
//	 echo  "no";
	 
	 
	// }
	//	include_once 'db.php';
		
		     $startDate = dateEnglish($date);
          $endDate = dateEnglish($date2);
    // echo $startDate;  ovst.vstdttm BETWEEN '$startDate' AND '$endDate'


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

 
/*$query="select a.icd10,a.c5opd,icd101.icd10name from(SELECT
ovstdx.icd10, 
 
Count(ovstdx.id) AS c5opd
FROM
ovst
INNER JOIN ovstdx ON ovstdx.vn = ovst.vn

WHERE
DATE_FORMAT(ovst.vstdttm,'%Y-%m-%d')  BETWEEN '2014-01-01' AND '2014-01-31'

AND NOT (ovstdx.icd10 like 'V%' OR ovstdx.icd10  LIKE 'W%'OR ovstdx.icd10  LIKE 'X%'OR ovstdx.icd10  LIKE 'Y%')
	 and ovstdx.icd10 not in( 'Z370','Z232','Z246'
,'Z480','Z133','Z00','Z242','U77') 
      AND ovst.an=0
group by ovstdx.icd10
order by c5opd  desc
limit 10)as a INNER JOIN icd101 on icd101.icd10 = a.icd10  ORDER BY c5opd  desc";*/
	  
	
	
	 
$pt10="SELECT a.cdiag, a.prediag,icd101.icd10name as medman from(SELECT
Count(ipt.prediag) AS cdiag,
ipt.prediag,
ipt.ward,
idpm.nameidpm
FROM
ipt inner join idpm on ipt.ward = idpm.idpm
WHERE
date(ipt.dchdate) BETWEEN '$startDate' AND '$endDate' and
ipt.ward ='02'
group by  prediag ORDER BY cdiag DESC) as a  INNER JOIN  icd101  on icd101.icd10 = a.prediag   limit  10";

	
	
	
	
	
	
	
	
	
	
	
	
	/*
	 
		 	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	 

	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$data[] = array(
			
			      'icd10' => $row['icd10'],
			      'icd10name' => $row['icd10name'] ,
			//    'FNAME' => 
		 	    'c5opd'=>  iconv('TIS-620','UTF-8//IGNORE',$row['c5opd']) 
		  );
	}
	
 //   $data[] = array(
   //    'TotalRows' => $total_rows,
	//   'Rows' => $dr
//	);
	$js1= json_encode($data);
	
	echo  $js1;
	
	*/
	
?>

<?php
  $resultpt10 = mysql_query($pt10) or die("SQL Error 1: " . mysql_error());
 	
 while ($row2 = mysql_fetch_array($resultpt10, MYSQL_ASSOC)) {
		$data2[] = array(
			
			      'prediag' => $row2['prediag'],
			      'medman' => iconv('TIS-620','UTF-8//IGNORE',$row2['medman']) ,
			//    'FNAME' => 
		 	    'cdiag'=>  iconv('TIS-620','UTF-8//IGNORE',$row2['cdiag']) 
		  );
	}
	
 //   $data[] = array(
   //    'TotalRows' => $total_rows,
	//   'Rows' => $dr
//	);
	$js5 = json_encode($data2);
  
 
 echo  $js5;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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