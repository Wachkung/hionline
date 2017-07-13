
        <?php


include_once '../config/connect_hisql.php';
include_once '../config/datetype.php';
$connect =connectToDB();
 //print_r($_POST);

  $date_by=$_POST['year'];    
  //$date_by="2015";   

                           
                            
 $sql2 = "select cdx.cname as cname,

SUM(CASE WHEN MONTH(cdx.cdate) = 01 THEN cdx.copdx ELSE 0 END) AS M1  ,    
SUM(CASE WHEN MONTH(cdx.cdate) = 02 THEN cdx.copdx ELSE 0 END) AS M2  ,
SUM(CASE WHEN MONTH(cdx.cdate) = 03 THEN cdx.copdx ELSE 0 END) AS M3  ,
SUM(CASE WHEN MONTH(cdx.cdate) = 04 THEN cdx.copdx ELSE 0 END) AS M4  ,
SUM(CASE WHEN MONTH(cdx.cdate) = 05 THEN cdx.copdx ELSE 0 END) AS M5  ,
SUM(CASE WHEN MONTH(cdx.cdate) = 06 THEN cdx.copdx ELSE 0 END) AS M6  ,
SUM(CASE WHEN MONTH(cdx.cdate) = 07 THEN cdx.copdx ELSE 0 END) AS M7  ,
SUM(CASE WHEN MONTH(cdx.cdate) = 08 THEN cdx.copdx ELSE 0 END) AS M8  ,
 SUM(CASE WHEN MONTH(cdx.cdate) = 09 THEN cdx.copdx ELSE 0 END) AS M9 ,
SUM(CASE WHEN MONTH(cdx.cdate) = 10 THEN cdx.copdx ELSE 0 END) AS M10  ,
SUM(CASE WHEN MONTH(cdx.cdate) = 11 THEN cdx.copdx ELSE 0 END) AS M11  ,
 SUM(CASE WHEN MONTH(cdx.cdate) = 12 THEN cdx.copdx ELSE 0 END) AS M12 ,
     sum(cdx.copdx) as total
   from(SELECT
  count(ors.postopdx)copdx  ,
ors.postopdx as cpdx,
ors.opdate as cdate,
ors.hn,
ors.an,
icd101.icd10name as cname 
FROM
ors
INNER JOIN icd101 ON icd101.icd10 = ors.postopdx
WHERE
 year(ors.opdate)='$date_by'   and  ors.AN>0
group by ors.opdate,ors.hn
order by ors.postopdx  desc) as cdx   group by cdx.cpdx ORDER BY total desc
	
	    "; 


$result = mysql_query($sql2) or die("SQL Error 1: " . mysql_error());
	 

	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$data[] = array(
				'cname'=>  iconv('TIS-620','UTF-8//IGNORE',$row['cname']) ,
			    'M1' => $row['M1'] ,
                'M2' => $row['M2'] ,
                'M3' => $row['M3']  ,
                'M4' => $row['M4'] , 
                'M5' => $row['M5'] , 
				'M6' => $row['M6'] , 
				'M7' => $row['M7'] , 
				'M8' => $row['M8'] , 
				'M9' => $row['M9'] , 
				'M10' => $row['M10'] , 
				'M11' => $row['M11'] , 
				'M12' => $row['M12'] , 
				'total' => $row['total']
                      );
															}
        

	$jspttype= json_encode($data);
	
	echo  $jspttype; 
	
	
	
?>
