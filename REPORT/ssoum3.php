 

<?php 



error_reporting(0);

//include_once 'db.php';

 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';
  
 $datefirst =  date('Y-m-d')-3;
  $datelast =  date('Y-m-d');
 $datefirst3 = date('Y-m-d')-3;
  $datefirst2 = date('Y-m-d')-2;
   $datefirst1= date('Y-m-d')-1;
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
                 
 
  
     
 

  $connect =connectToDB();


	 
	 

 
$query="SELECT $y1+543
	  as yearvst, 
   
     count(ovst.vn) as vn ,
     count(DISTINCT(ovst.hn))
as hn
FROM ovst  where  date(ovst.vstdttm) BETWEEN '$year3' and  '$year3_1'  and ovst.cln ='S0100'   
    union
    SELECT  $Y+543
	  as yearvst, 
   
     count(ovst.vn) as vn ,
     count(DISTINCT(ovst.hn))
as hn
FROM ovst  where  date(ovst.vstdttm) BETWEEN '$year2' and  '$year2_1'  and ovst.cln ='S0100'   


";
	  
	
	//echo $query;
	 
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
			
			    /*  'icd10' => $row['icd10'],
			      'icd10name' => $row['icd10name'] ,
			    'FNAME' => 
		 	    'c5opd'=>  iconv('TIS-620','UTF-8//IGNORE',$row['c5opd']) */
				
				 
			  
				
		            'yearvst'=> $row['yearvst'],
		        //  'namecln'=> $row['namecln'],
				 'vn'=>  iconv('TIS-620','UTF-8//IGNORE',$row['vn']),
				  'hn'=> $row['hn'] 
				  
		 
		 
		 
		 
		 
		 
		 
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