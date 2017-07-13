 

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


	 
	 

 
$query=" select a.inscl,a.nameinscl,
count(CASE WHEN a.yeaript between '2011-10-01'and '2012-09-30' and an >0 THEN  a.can END) AS 'ddd' ,

count(CASE WHEN a.yeaript between '2012-10-01'and '2013-09-30' and an >0 THEN  a.can END) AS 'ddd1' ,
count(CASE WHEN a.yeaript between '2013-10-01'and '2014-09-30' and an >0 THEN  a.can END) AS 'ddd2' ,

count(CASE WHEN a.yeaript between '2011-10-01'and '2012-09-30' and an  = 0 THEN  a.can END) AS 'sss1' ,
count(CASE WHEN a.yeaript between '2012-10-01'and '2013-09-30' and an  = 0 THEN  a.can END) AS 'sss2' ,
count(CASE WHEN a.yeaript between '2013-10-01'and '2014-09-30' and an  = 0 THEN  a.can END) AS 'sss3',

count(CASE WHEN a.yeaript between '2011-10-01'and '2012-09-30' and a.ovstost = 3 THEN  a.can END) AS 'ssse1' ,
count(CASE WHEN a.yeaript between '2012-10-01'and '2013-09-30' and a.ovstost = 3 THEN  a.can END) AS 'ssse2' ,
count(CASE WHEN a.yeaript between '2013-10-01'and '2014-09-30' and a.ovstost = 3 THEN  a.can END) AS 'ssse3'
from
(
SELECT dt.dn, 
	dt.vn AS can, 
	dt.rcptno, 
	dt.schl, 
	dt.grp, 
	dt.pttype, 
	dt.dnt, 
	dt.hn, 
	dt.an, 
	dt.vstdttm AS yeaript, 
	pttype.namepttype, 
 
	pttype.chkshow, 
	ovst.cln, 
     ovst.ovstost,
	pttypegr.inscl, 
	pttypegr.nameinscl
FROM pttype 
 

INNER JOIN dt ON pttype.pttype = dt.pttype
	 INNER JOIN ovst ON ovst.vn = dt.vn
	 INNER JOIN pttypegr ON pttypegr.inscl = pttype.inscl 
     where year(dt.vstdttm) between 2011 and 2014) as a GROUP BY a.inscl  order by sss1 desc
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
				
				 
				'nameinscl'=>  iconv('TIS-620','UTF-8//IGNORE',$row['nameinscl']),
				
		  'ddd'=> $row['ddd'],
		          'ddd1'=> $row['ddd1'],
				  'ddd2'=> $row['ddd2'],
				   
		  'sss1'=> $row['sss1'],
		          'sss2'=> $row['sss2'],
				  'sss3'=> $row['sss3'],
		 
		  'ssse1'=> $row['ssse1'],
		          'ssse2'=> $row['ssse2'],
				  'ssse3'=> $row['ssse3']
		 
		 
		 
		 
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