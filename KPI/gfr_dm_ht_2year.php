 

<?php 



error_reporting(0);

//include_once 'db.php';
//print_r($_POST//
 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';

 $date1=$_POST['date'];
 $date2=$_POST['date2'];



           $nowdate = date("Y-m-d");

        //  echo $nowdate .'kkkkkkkkk';"<br>";
          
          
          list($Y, $m, $d) = explode('-', $nowdate);
                  
                   $ythai=$Y+543;
                  
                   $y10= $Y-15;
                    $y1= $Y-1;
                     
                     $ythai2=$y1+543;
                    
                    $y2 =     $Y-2;
                       $d1='01';
                       $d2='30';
                       $m1='10'; 
                       $m2='09';
                  $year12  = "$y2-$m1-$d1";
                 $year1  = "$y1-$m1-$d1";
                 $year2    ="$Y-$m2-$d2";
                 $year10   ="$y10-$m1-$d1";
               //   echo $year1 .'cccc';"<br>";
                 //   echo $year10.'2000';  
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

 
$query="  
 
SELECT 
      '$ythai2' as y1,
      sum(case  when d.gfr  then d.gfr BETWEEN 1 and 14 end )  as  gfr1  , 
      sum(case  when d.gfr  then d.gfr BETWEEN 15 and 29 end )  as  gfr2  , 
      sum(case  when d.gfr  then d.gfr BETWEEN 30 and 59 end )  as  gfr3  , 
       sum(case  when d.gfr  then d.gfr BETWEEN 60 and 94 end )  as  gfr4  ,
       sum(case  when d.gfr  then d.gfr  > 95 end )  as  gfr5  ,
     count(d.gfr) as total
from(

SELECT  
c.bbb,c.cccc,c.dmht,c.fff,c.gfr,c.hn,
 c.cgfr

from(SELECT 
   b.hn,
    DATE_FORMAT(b.bbb,'%Y-%m-%d') as bbb ,
   count(b.hn) as cgfr,
    b.gfr,

  b.dmht,

 b.fff,
 count(b.hn) as cccc

from (
select
 a.fff,
a.bbb,a.brthdate ,a.dmht,
a.creat1,
a.hn,

a.icd10,a.male,
  
 a.creat1 as cr ,
  (DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(a.BRTHDATE, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(a.BRTHDATE, '00-%m-%d'))) AS age, 
 (
  CASE a.MALE 
  WHEN '1' THEN 1 
  WHEN '2' THEN 0.742
 ELSE
 '' 
  END
 ) AS VAL1 ,
   
 TRUNCATE( ( ROUND( ( 186 /POWER(a.creat1, (1.154) ) ), 2 ) * ( ROUND(POW(( DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(a.BRTHDATE, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(a.BRTHDATE, '00-%m-%d'))), (-0.203) ), 2 ) ) * (
  CASE a.MALE 
  WHEN '1'
  THEN 1 
 WHEN '2'
   THEN 0.742 ELSE '' END ) ), 0 ) AS GFR 


from(SELECT count(pt.hn) AS fff, 
	ovstdx.vn, 
	ovst.vstdttm AS bbb, 
	ovstdx.icd10, 
	lbbk.ln, 
	SUBSTR(lbuncr.creat,1,3) as creat1 ,
	pt.brthdate, 
	pt.male, 
	pt.hn, 
	GROUP_CONCAT(grdmht.icd10) as  dmht
FROM ovstdx INNER JOIN lbbk ON ovstdx.vn = lbbk.vn
	 INNER JOIN lbuncr ON lbbk.ln = lbuncr.ln
	 INNER JOIN ovst ON ovst.vn = ovstdx.vn
	 INNER JOIN pt ON pt.hn = ovst.hn
	 INNER JOIN grdmht ON grdmht.icd10 = ovstdx.icd10
WHERE    DATE_FORMAT(ovst.vstdttm,'%Y-%m-%d') 
 between '$year10'  and  '$year2'   
GROUP BY ovstdx.vn
ORDER BY pt.hn ASC)  as a  
 -- กำหนด  dm  ht  ใหม่ที่นี้
-- where
 -- fff >1 
 ) as b  
 where DATE_FORMAT(b.bbb,'%Y-%m-%d') between '$year10'  and  '$year1'  
  -- and gfr <= 59    //ถ้าใส่ จะเพิ่ม  1  //////////////
--  กำหนด  dm ht  mujouj
-- and dmht like 'E%,I%' or dmht like 'I%,E%' 

GROUP BY b.hn  ORDER BY hn desc) as c where 

-- cccc =1 
 -- and 
DATE_FORMAT(c.bbb,'%Y-%m-%d') between '$year12'  and  '$year1' 
-- กำหนด gfr  ที่ต้องการ
 --  and gfr  > 95
and gfr <> ''
group by hn  
order by hn   asc
 ) as d
union


SELECT 
      '$ythai'as y2,
      sum(case  when d.gfr  then d.gfr BETWEEN 1 and 14 end )  as  gfr1  , 
      sum(case  when d.gfr  then d.gfr BETWEEN 15 and 29 end )  as  gfr2  , 
      sum(case  when d.gfr  then d.gfr BETWEEN 30 and 59 end )  as  gfr3  , 
       sum(case  when d.gfr  then d.gfr BETWEEN 60 and 94 end )  as  gfr4  ,
       sum(case  when d.gfr  then d.gfr  > 95 end )  as  gfr5  ,
     count(d.gfr) as total
from(

SELECT  
c.bbb,c.cccc,c.dmht,c.fff,c.gfr,c.hn,
 c.cgfr

from(SELECT 
   b.hn,
    DATE_FORMAT(b.bbb,'%Y-%m-%d') as bbb ,
   count(b.hn) as cgfr,
    b.gfr,

  b.dmht,

 b.fff,
 count(b.hn) as cccc

from (
select
 a.fff,
a.bbb,a.brthdate ,a.dmht,
a.creat1,
a.hn,

a.icd10,a.male,
  
 a.creat1 as cr ,
  (DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(a.BRTHDATE, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(a.BRTHDATE, '00-%m-%d'))) AS age, 
 (
  CASE a.MALE 
  WHEN '1' THEN 1 
  WHEN '2' THEN 0.742
 ELSE
 '' 
  END
 ) AS VAL1 ,
   
 TRUNCATE( ( ROUND( ( 186 /POWER(a.creat1, (1.154) ) ), 2 ) * ( ROUND(POW(( DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(a.BRTHDATE, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(a.BRTHDATE, '00-%m-%d'))), (-0.203) ), 2 ) ) * (
  CASE a.MALE 
  WHEN '1'
  THEN 1 
 WHEN '2'
   THEN 0.742 ELSE '' END ) ), 0 ) AS GFR 


from(SELECT count(pt.hn) AS fff, 
	ovstdx.vn, 
	ovst.vstdttm AS bbb, 
	ovstdx.icd10, 
	lbbk.ln, 
	SUBSTR(lbuncr.creat,1,3) as creat1 ,
	pt.brthdate, 
	pt.male, 
	pt.hn, 
	GROUP_CONCAT(grdmht.icd10) as  dmht
FROM ovstdx INNER JOIN lbbk ON ovstdx.vn = lbbk.vn
	 INNER JOIN lbuncr ON lbbk.ln = lbuncr.ln
	 INNER JOIN ovst ON ovst.vn = ovstdx.vn
	 INNER JOIN pt ON pt.hn = ovst.hn
	 INNER JOIN grdmht ON grdmht.icd10 = ovstdx.icd10
WHERE    DATE_FORMAT(ovst.vstdttm,'%Y-%m-%d') 
 between '$year10'  and  '$year2'  
GROUP BY ovstdx.vn
ORDER BY pt.hn ASC)  as a  
 -- กำหนด  dm  ht  ใหม่ที่นี้
-- where
 -- fff >1 
 ) as b  
 where DATE_FORMAT(b.bbb,'%Y-%m-%d') between '$year10'  and  '$year2'  
  -- and gfr <= 59    //ถ้าใส่ จะเพิ่ม  1  //////////////
--  กำหนด  dm ht  mujouj
-- and dmht like 'E%,I%' or dmht like 'I%,E%' 

GROUP BY b.hn  ORDER BY hn desc) as c where 

-- cccc =1 
 -- and 
DATE_FORMAT(c.bbb,'%Y-%m-%d') between '$year1'  and  '$year2' 
-- กำหนด gfr  ที่ต้องการ
 --  and gfr  > 95
  and gfr <> ''
group by hn  
order by hn   asc
 ) as d ";
	  
	
	
	 
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
		 	    'y1'=>  iconv('TIS-620','UTF-8//IGNORE',$row['y1']) ,
                             //  'y2'=>  iconv('TIS-620','UTF-8//IGNORE',$row['y2']) ,
                    'gfr1' => $row['gfr1'],
			      'gfr2' => $row['gfr2'] ,
                               'gfr3' => $row['gfr3'],
			      'gfr4' => $row['gfr4'] ,
                    
                                 'gfr5' => $row['gfr5'],
			       
                              
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