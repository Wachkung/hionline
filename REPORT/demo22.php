 

<?php 



error_reporting(0);

//include_once 'db.php';

 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';

 //$date=$_POST['date'];
 //$date2=$_POST['date2'];
// if(isset($date)||isset($date2)) {
        
	//  print_r($_POST);
 //}else {
//	 
//	 echo  "no";
	 
	 
	// }
	//	include_once 'db.php';
		
		  //   $startDate = dateEnglish($date);
        //  $endDate = dateEnglish($date2);
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

 
$query="SELECT cur_dig.yyyy as yearnew, 
sum(CASE one WHEN one THEN one ELSE 0 END) AS M1, 
sum(CASE two WHEN two THEN two ELSE 0 END) AS M2 ,
 sum(CASE three WHEN three THEN three ELSE 0 END) AS M3 , 
sum(CASE four WHEN four THEN four ELSE 0 END) AS M4, 
sum(CASE fire WHEN fire THEN fire ELSE 0 END) as M5, 
sum(CASE six WHEN six THEN six ELSE 0 END) as M6,
 sum(CASE sven WHEN sven THEN sven ELSE 0 END) as M7,
 sum(CASE eight WHEN eight THEN eight ELSE 0 END) as M8,
 sum(CASE nine WHEN nine THEN nine ELSE 0 END) as M9, 
sum(CASE ten WHEN ten THEN ten ELSE 0 END) as M10,
 sum(CASE elev WHEN elev THEN elev ELSE 0 END) as M11, 
sum(CASE tevl WHEN tevl THEN tevl ELSE 0 END) as M12 , 
count(cur_dig.hn1) as total FROM (

SELECT  DATE_FORMAT(ovst.vstdttm, '%Y' ) as yyyy, 
DATE_FORMAT(ovst.vstdttm, '%m' )=2 as two, 
DATE_FORMAT(ovst.vstdttm, '%m' )=3 as three, 
DATE_FORMAT(ovst.vstdttm, '%m' )=1 as one, 
DATE_FORMAT(ovst.vstdttm, '%m' )=4 as four, 
DATE_FORMAT(ovst.vstdttm, '%m' )=5 as fire, 
DATE_FORMAT(ovst.vstdttm, '%m' )=6 as six, 
DATE_FORMAT(ovst.vstdttm, '%m' )=7 as sven, 
DATE_FORMAT(ovst.vstdttm, '%m' )=8 as eight, 
DATE_FORMAT(ovst.vstdttm, '%m' )=9 as nine,
DATE_FORMAT(ovst.vstdttm, '%m' )=10 as ten, 
DATE_FORMAT(ovst.vstdttm, '%m' )=11 as elev,
DATE_FORMAT(ovst.vstdttm, '%m' )=12 as tevl, 
ovst.hn as hn1 ,  
DATE_FORMAT(ovst.vstdttm, '%Y' ) = 2009 as bbbbbb, DATE_FORMAT(ovst.vstdttm, '%Y' ) = 2010 as aaaaaa, 
DATE_FORMAT(ovst.vstdttm, '%Y' ) = 2011 as cccccc, DATE_FORMAT(ovst.vstdttm, '%Y' ) = 2012 as dddddd, 
DATE_FORMAT(ovst.vstdttm, '%Y' ) = 2013 as eeeeee , 
count(ovst.hn) as aaa FROM ovst where ovst.cln <> 40100 AND DATE_FORMAT(ovst.vstdttm, '%Y' ) between 2010 and 2014 GROUP BY hn1,
 one,two,three,four,fire,six,sven,eight,nine, ten,elev,tevl,aaaaaa,bbbbbb,cccccc,dddddd,eeeeee)cur_dig GROUP BY yearnew
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
		 
		          'M1'=> $row['M1'],
				  'M2'=> $row['M2'],
				  'M3'=> $row['M3'],
				  'M4'=> $row['M3'],
				  'M5'=> $row['M5'],
				  'M6'=> $row['M6'],
				  'M7'=> $row['M7'],
				  
				   'M8'=> $row['M8'],
				  'M9'=> $row['M9'],
				  'M10'=> $row['M10'],
				  'M11'=> $row['M11'],
				  'M12'=> $row['M12']
				  
		 
		 
		 
		 
		 
		 
		 
		 
		 
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