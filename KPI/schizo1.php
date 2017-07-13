 

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

 
$query="   select  a.grschizo,
          grschizoname.nameschizo,
      
          sum(case when a.can1  then  month(a.datemont) = '10' end) as sm10,
        
          sum(case when a.can1  then  month(a.datemont) = '11' end) as sm11,
          
          sum(case when a.can1  then  month(a.datemont) = '12' end) as sm12,
         sum(case when a.can1  then  month(a.datemont) = '1' end) as sm1,
       
          sum(case when a.can1  then  month(a.datemont) = '2' end) as sm2,
          
          sum(case when a.can1  then  month(a.datemont) = '3' end) as sm3,
          sum(case when a.can1  then  month(a.datemont) = '4' end) as sm4,
       
          sum(case when a.can1  then  month(a.datemont) = '5' end) as sm5,
          
          sum(case when a.can1  then  month(a.datemont) = '6' end) as sm6,
           sum(case when a.can1  then  month(a.datemont) = '7' end) as sm7,
          sum(case when a.can1  then  month(a.datemont) = '8' end) as sm8,
       
          sum(case when a.can1  then  month(a.datemont) = '9' end) as sm9,
         count(a.can1) as total

from(

SELECT ovstdx.vn, 
	count(grschizo.icd10) AS can1, 
	DATE_FORMAT(ovst.vstdttm,'%Y-%m-%d') AS datemont, 
	ovst.hn, 
	grschizo.icd10, 
	 
	grschizo.grschizo
FROM grschizo INNER JOIN ovstdx ON grschizo.icd10 = ovstdx.icd10
	 INNER JOIN ovst ON ovst.vn = ovstdx.vn
WHERE DATE_FORMAT(ovst.vstdttm,'%Y-%m-%d') between '$startDate' and   '$endDate'
GROUP BY ovst.vn
ORDER BY hn ASC  )  as a
 INNER join grschizoname on grschizoname.id = a.grschizo 
 GROUP BY   grschizoname.nameschizo   ORDER BY  total desc ";
	  
	
	
	 
/*$pt10="select   a.prediag,icd101.icd10name as prename,a.prediagc5opd from(SELECT
Count(ipt.prediag) AS prediagc5opd,
ipt.prediag as prediag
FROM
ipt
WHERE
DATE_FORMAT(ipt.dchdate,'%Y-%m-%d') BETWEEN '2014-01-01' AND '2014-12-31'
GROUP BY prediag  ORDER BY prediagc5opd desc LIMIT 10) as a    INNER JOIN icd101 on icd101.icd10 = a.prediag";

	*/
	
	
	
	
	
	
	
	
	
	
	 
	
	 
		 	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	 

	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$data[] = array(
			
			      
			//    'FNAME' => 
		 	    'nameschizo'=>  iconv('TIS-620','UTF-8//IGNORE',$row['nameschizo']) ,
                              'sm10' => $row['sm10'],
			      'sm11' => $row['sm11'] ,
                               'sm12' => $row['sm12'],
			      'sm1' => $row['sm1'] ,
                    
                                 'sm2' => $row['sm2'],
			      'sm3' => $row['sm3'] ,
                              'sm4' => $row['sm4'],
			      'sm5' => $row['sm5'] ,
                               'sm6' => $row['sm6'],
			      'sm7' => $row['sm7'] ,
                               'sm8' => $row['sm8'],
			      'sm9' => $row['sm9'] ,
                              
                     'total' => $row['total'] ,
                    
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