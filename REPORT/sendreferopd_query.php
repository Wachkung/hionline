
        <?php


include_once '../config/connect_hisql.php';
include_once '../config/datetype.php';
$connect =connectToDB();
//print_r($_POST);


  $year_by=$_POST['year']; 
 

  $startyear = $year_by-1;
  $endyear = $year_by;
  
  //$today = date("m");     
  $m09='09';
   $m10='10';
         $d1 ='01';
         $d30='30';
     $start=$startyear.'-'.$m09.'-'.$d1;
      $end=$endyear.'-'.$m10.'-'.$d30;
   
      
  //$cap1 = substr($startyear,2,2);
  //$cap2 = substr($endyear,2,2);

 
 $smd10 = '1001'; $sy10 =  $startyear.$smd10; 
 $emd10 = '1031'; $ey10 =  $startyear.$emd10;
 $smd11 = '1101'; $sy11 =  $startyear.$smd11;
 $emd11 = '1130'; $ey11 =  $startyear.$emd11;
 $smd12 = '1201'; $sy12 =  $startyear.$smd12;
 $emd12 = '1231'; $ey12 =  $startyear.$emd12;
 $smd01 = '0101'; $sy01 =  $endyear.$smd01;
 $emd01 = '0131'; $ey01 =  $endyear.$emd01;
 $smd02 = '0201'; $sy02 =  $endyear.$smd02;
 $emd02 = '0228'; $ey02 =  $endyear.$emd02;
 $smd03 = '0301'; $sy03 =  $endyear.$smd03;
 $emd03 = '0331'; $ey03 =  $endyear.$emd03;
 $smd04 = '0401'; $sy04 =  $endyear.$smd04;
 $emd04 = '0430'; $ey04 =  $endyear.$emd04;
 $smd05 = '0501'; $sy05 =  $endyear.$smd05;
 $emd05 = '0531'; $ey05 =  $endyear.$emd05;
 $smd06 = '0601'; $sy06 =  $endyear.$smd06;
 $emd06 = '0630'; $ey06 =  $endyear.$emd06;
 $smd07 = '0701'; $sy07 =  $endyear.$smd07;
 $emd07 = '0731'; $ey07 =  $endyear.$emd07;
 $smd08 = '0801'; $sy08 =  $endyear.$smd08;
 $emd08 = '0831'; $ey08 =  $endyear.$emd08;
 $smd09 = '0901'; $sy09 =  $endyear.$smd09;
 $emd09 = '0930'; $ey09 =  $endyear.$emd09;
     
            
                            
 $sql2 = "
 
 SELECT
 d.cname,d.amppart,
       
SUM(CASE WHEN month(d.accdate) ='10' THEN d.can END) AS 'M10' ,
SUM(CASE WHEN month(d.accdate) ='11' THEN d.can END) AS 'M11', 
SUM(CASE WHEN month(d.accdate) ='12' THEN d.can END) AS 'M12' ,
SUM(CASE WHEN month(d.accdate) ='01' THEN d.can END) AS 'M1' ,
SUM(CASE WHEN month(d.accdate) ='02' THEN d.can END) AS 'M2' ,
SUM(CASE WHEN month(d.accdate) ='03' THEN d.can END) AS 'M3' ,
SUM(CASE WHEN month(d.accdate) ='04' THEN d.can END) AS 'M4' ,
SUM(CASE WHEN month(d.accdate) ='05' THEN d.can END) AS 'M5' ,
SUM(CASE WHEN month(d.accdate) ='06' THEN d.can END) AS 'M6' ,
SUM(CASE WHEN month(d.accdate) ='07' THEN d.can END) AS 'M7' ,
SUM(CASE WHEN month(d.accdate) ='08' THEN d.can END) AS 'M8' ,
SUM(CASE WHEN month(d.accdate) ='09' THEN d.can END) AS 'M9' ,
SUM(d.can) AS 'total' 

from(select  

c.amppart,c.can,c.nameampur as cname ,c.accdate from
(SELECT  b.can,b.hn,b.amppart,ampur.nameampur,b.accdate

from(SELECT
a.can,
pt.hn,
pt.amppart,
pt.moopart,
pt.tmbpart,
a.accdate

from(

SELECT ovstdx.icd10 AS macdx, 
	orfro.rfrcs, 
	orfro.rfrlct, 
	orfro.rfrno, 
	orfro.vn, 
	orfro.vstdate  as accdate

 , 
	count(orfro.vn) AS can, 
	ovst.ovstost, 
	ovst.hn
FROM ovstdx INNER JOIN orfro ON ovstdx.vn = orfro.vn
	 INNER JOIN ovst ON ovst.vn = ovstdx.vn AND ovst.vn = orfro.vn
WHERE orfro.vstdate between '$start' and '$end'   and ovstdx.cnt='1'  and ovst.ovstost ='3'  and ovst.an ='0'
GROUP BY vn)as a INNER join pt on pt.hn = a.hn ) as b INNER JOIN tumbon ON tumbon.amppart = b.amppart AND tumbon.tmbpart = b.tmbpart
	 INNER JOIN ampur ON ampur.amppart = tumbon.amppart AND ampur.chwpart = tumbon.chwpart
WHERE tumbon.chwpart = '34') as c  ) as d   GROUP BY d.amppart  ORDER BY total desc
	    "; 


$result = mysql_query($sql2) or die("SQL Error 1: " . mysql_error());
	 
	

	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				

		$data[] = array(				
			    
                'cname' =>iconv('TIS-620','UTF-8//IGNORE',$row['cname']) ,
                'M10' => $row['M10']  ,
                'M11' => $row['M11'] , 
                'M12' => $row['M12'] , 
				'M1' => $row['M1'] , 
				'M2' => $row['M2'] , 
				'M3' => $row['M3'] , 
				'M4' => $row['M4'] , 
				'M5' => $row['M5'] , 
				'M6' => $row['M6'] , 
				'M7' => $row['M7'] , 
				'M8' => $row['M8'] ,
				'M9' => $row['M9'] , 
				'total' => $row['total'] 		
				
                      );
		 
					}								
				
	      

	$jspttype= json_encode($data);
	
	echo  $jspttype; 
	
	
	
?>
