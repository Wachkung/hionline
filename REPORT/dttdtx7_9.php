 

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
    
 
  
     
 

  $connect =connectToDB();


	 
	 

 
$query="  
select a.grdt,a.namegrdt,
    
    
  count(CASE WHEN a.yeaript between '2011-10-01'and '2012-09-30'    THEN a.chn END) AS 'aaa' ,
  SUM(CASE WHEN a.yeaript between '2011-10-01'and '2012-09-30'  THEN a.cvn END) AS 'aaa2' , 
 
  count(CASE WHEN a.yeaript between '2012-10-01'and '2013-09-30'    THEN a.chn END) AS 'bbb' ,
  SUM(CASE WHEN a.yeaript between '2012-10-01'and '2013-09-30'  THEN a.cvn END) AS 'bbb2' , 
 count(CASE WHEN a.yeaript between '2013-10-01'and '2014-09-30'    THEN a.chn END) AS 'ccc' ,
  SUM(CASE WHEN a.yeaript between '2013-10-01'and '2014-09-30'  THEN a.cvn END) AS 'ccc2'  


  from(
SELECT  count(dt.vn) as cvn , 
	dtdx.dttx, 
	dt.vstdttm AS yeaript, 
	count(dt.hn) as chn, 
	grdtdtxname.namegrdt,
	grdtdtxname.id AS grdt 
    
FROM dtdx INNER JOIN dt ON dtdx.dn = dt.dn
	 INNER JOIN grdtdtx ON grdtdtx.codedtx = dtdx.dttx
	 INNER JOIN grdtdtxname ON grdtdtxname.id = grdtdtx.grdtx
WHERE year(dt.vstdttm) between '2011' and '2014'
  and 
 grdtdtx.grdtx  between  7 and  9  and  dt.vn <> 0   GROUP BY vn ORDER BY hn
    asc ) as a  GROUP BY  a.grdt
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
				
				 
				'grdt'=>  iconv('TIS-620','UTF-8//IGNORE',$row['grdt']),
					'namegrdt'=>  iconv('TIS-620','UTF-8//IGNORE',$row['namegrdt']),
                  'aaa'=> $row['aaa'],
		            
				  'aaa2'=> $row['aaa2'],
				  
				
				  'bbb'=> $row['bbb'],
		             
				  'bbb2'=> $row['bbb2'],
				   
				 
		            'ccc'=> $row['ccc'],
		            
				  'ccc2'=> $row['ccc2'],
				  
		      
			      'ddd'=> $row['ddd'],
		            
				  'ddd2'=> $row['ddd2'],
				  
		 
		 
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