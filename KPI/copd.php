 

<?php 



error_reporting(0);

//include_once 'db.php';
//print_r($_POST//
 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';

  

         
   $nowdate = date("Y-m-d");

    
          
          
          list($Y, $m, $d) = explode('-', $nowdate);
                   $y10= $Y-15;
                    $y1= $Y-1;        
                    $y2= $Y-2;
                     $y3= $Y-3;
 
                       $d01='01';
                       $d30='30';
                       $m10='10'; 
                       $m09='09';
               
                 $year4=  $y3.'-'.$m10.'-'.$d01;
                 $year4_1=  $y2.'-'.$m09.'-'.$d30;      
                       
                 $year3=  $y2.'-'.$m10.'-'.$d01;
                 $year3_1=  $y1.'-'.$m09.'-'.$d30;    
                   
                  $year2=  $y1.'-'.$m10.'-'.$d01;
                  $year2_1=  $Y.'-'.$m09.'-'.$d30;   
                 
                  // 3
                  
                 // $year4  and  $year2_1
                  
                   // echo $year4 .'ccfffcc';"<br>";
                   // echo $year4_1.'ddddd'; "<br>";    
                 //       echo $year3 .'cccc';"<br>";
                 //   echo $year3_1.'ddddd';  "<br>";   
                       
                  //   echo $year2 .'cccc';"<br>";
                  //  echo $year2_1.'dddd';   "<br>";  
                       
		
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

 
$query="  
 
 
 select  
         '130' as start,
           
          -- sum(case when a.cvn then a.yvst between '$year4' and '$year4_1' end)  as year_3,
           (sum(case when a.cvn then a.yvst between '$year4' and '$year4_1' end)/143608)*100000 as year3,
         --  sum(case when a.cvn then a.yvst between '$year3' and '$year3_1' end) as year_2,
           (sum(case when a.cvn then a.yvst between '$year3' and '$year3_1' end)/143608)*100000 as year2,
         --  sum(case when a.cvn then a.yvst between '$year2' and '$year2_1' end)  as year_1,
           (sum(case when a.cvn then a.yvst between '$year2' and '$year2_1' end)/143608)*100000 as year1
from(SELECT ovst.hn, 
	count(ovst.vstdttm) cvn, 
	DATE_FORMAT(ovst.vstdttm,'%Y-%m-%d') as yvst,
    ovstdx.icd10, 
	ovstdx.icd10name
FROM ovstdx INNER JOIN ovst ON ovstdx.vn = ovst.vn
where DATE_FORMAT(ovst.vstdttm,'%Y-%m-%d') between '$year4' and '$year2_1'
and ovstdx.icd10 between 'J440' and 'J449'  
--   สถานะ การ  admitted
and ovst.ovstost = '4'
GROUP BY ovst.vstdttm

) as a ";
	  
	
	
	 
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
		 	     'start'=>  iconv('TIS-620','UTF-8//IGNORE',$row['start']) ,
                             //  'y2'=>  iconv('TIS-620','UTF-8//IGNORE',$row['y2']) ,
                    'year3' => $row['year3'],
			      'year2' => $row['year2'] ,
                               'year1' => $row['year1'],
			      
                    
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