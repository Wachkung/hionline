 

<?php 



//error_reporting(0);

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
 
 
$query1=" 
  select  b.id,b.namegrdt  as  namegrdt3,
        
   count(  b.can  ) as countdttx3,
   sum(b.can   ) as sumdttx3


 from(
select
a.age,
a.an,
a.brthdate,
 
a.dn,
a.dnt,
a.grp,
a.hn,
 a.vn,
a.yearvstdate,
count(a.dttx)as can,
grdtdtxname.namegrdt,
grdtdtxname.id,
a.dttx
from

(

SELECT dt.dn, 
 dt.vn,
	year(DATE_FORMAT(dt.vstdttm,'%Y-%m-%d'))-year(brthdate) AS age, 
	dt.an, 
	 
	dt.vstdttm,
      dt.hn, 
	dt.dnt, 
	dt.grp, 
	dt.pttype, 
	dt.schl, 
	dt.rcptno, 
	pt.brthdate, 
	year(dt.vstdttm) AS yearvstdate, 
	 
 
	dtdx.dttx
FROM pt RIGHT OUTER JOIN dt ON pt.hn = dt.hn
	 INNER JOIN dtdx ON dtdx.dn = dt.dn
WHERE DATE_FORMAT(dt.vstdttm,'%Y-%m-%d') between '$startDate' and  '$endDate'
  
  
 
ORDER BY age ASC) as a  INNER join grdtdtx   on grdtdtx.codedtx = a.dttx  
  INNER JOIN grdtdtxname ON grdtdtxname.id = grdtdtx.grdtx   

where grdtdtxname.id in(10,12,13,14,15,16)
GROUP BY a.dttx,a.vn

   order by age,vn asc ) as b   GROUP BY b.id,b.namegrdt
 ";
	  
	
	
	 
/*$pt10="select   a.prediag,icd101.icd10name as prename,a.prediagc5opd from(SELECT
Count(ipt.prediag) AS prediagc5opd,
ipt.prediag as prediag
FROM
ipt
WHERE
DATE_FORMAT(ipt.dchdate,'%Y-%m-%d') BETWEEN '2014-01-01' AND '2014-12-31'
GROUP BY prediag  ORDER BY prediagc5opd desc LIMIT 10) as a    INNER JOIN icd101 on icd101.icd10 = a.prediag";

	*/
	
	
	
	
	
	
	
 

	
	 
	
	 
		 	$result = mysql_query($query1) or die("SQL Error 1: " . mysql_error());
	 

	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$data[] = array(
			'namegrdt3'=>  iconv('TIS-620','UTF-8//IGNORE',$row['namegrdt3']) ,
			      'countdttx3' => $row['countdttx3'] ,
                     
                          
                    
                    );
	}
        
       // echo '$query';
	
 //   $data[] = array(
   //    'TotalRows' => $total_rows,
	//   'Rows' => $dr
//	);
	$jspttype= json_encode($data);
	
	echo  $jspttype; 
	
	
	
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