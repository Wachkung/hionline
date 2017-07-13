 

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
 
 select 

 'total bed',
  SUM(CASE WHEN a.dchdate BETWEEN '2010-10-01' and '2011-09-30'    THEN   a.daycnt   end ) as aaa ,
 
  SUM(CASE WHEN a.dchdate BETWEEN '2011-10-01' and '2012-09-30'    THEN  a.daycnt   end ) as bbb , 
 
 SUM(CASE WHEN a.dchdate BETWEEN '2012-10-01' and '2013-09-30'    THEN  a.daycnt   end ) as ccc,
 
SUM(CASE WHEN a.dchdate BETWEEN '2013-10-01' and '2014-09-30'    THEN  a.daycnt   end ) as ddd  
 
from(SELECT ipt.daycnt, 
	ipt.hn, 
	ipt.an, 
	ipt.dchdate
FROM ipt    where    daycnt <> 0  and   year(ipt.dchdate) between YEAR(CURDATE())-4  and 
YEAR(CURDATE())   ORDER BY   ipt.daycnt DESC ) as a    
union
select 

 'จำนวนผู้ป่วยใน',
  SUM(CASE WHEN a.dchdate BETWEEN '2010-10-01' and '2011-09-30'    THEN   a.an   end ) as aaa ,
 
  SUM(CASE WHEN a.dchdate BETWEEN '2011-10-01' and '2012-09-30'    THEN  a.an   end ) as bbb , 
 
 SUM(CASE WHEN a.dchdate BETWEEN '2012-10-01' and '2013-09-30'    THEN  a.an   end ) as ccc,
 
SUM(CASE WHEN a.dchdate BETWEEN '2013-10-01' and '2014-09-30'    THEN  a.an   end ) as ddd  
 
from(   SELECT ipt.daycnt, 
	ipt.hn, 
count(ipt.an ) as an,
	ipt.dchdate
FROM ipt    where    daycnt <> 0  and   year(ipt.dchdate) between YEAR(CURDATE())-4  and 
YEAR(CURDATE())  group by an ORDER BY   ipt.daycnt DESC  ) as a








UNION

select   'Bed Occupancy Rate)',
 
  SUM(CASE WHEN a.dchdate BETWEEN '2010-10-01' and '2011-09-30'    THEN  (a.daycnt*100)/43800   end ) as aaa,
 
SUM(CASE WHEN a.dchdate BETWEEN '2011-10-01' and '2012-09-30'    THEN  (a.daycnt*100)/43800   end ) as bbb ,
 
 SUM(CASE WHEN a.dchdate BETWEEN '2012-10-01' and '2013-09-30'    THEN  (a.daycnt*100)/43800  end ) as ccc ,
 
SUM(CASE WHEN a.dchdate BETWEEN '2013-10-01' and '2014-09-30'    THEN  (a.daycnt*100)/73000  end ) as ddd 
from(SELECT ipt.daycnt, 
	ipt.hn, 
	ipt.an, 
	ipt.dchdate
FROM ipt    where    daycnt <> 0  and   year(ipt.dchdate) between YEAR(CURDATE())-4  and 
YEAR(CURDATE())   ORDER BY   ipt.daycnt DESC ) as a     
UNION
 select  
'Length of Stay',
a.aaaa/a.aaa1  as  aaa,
a.bbbb/a.bbb1  as  bbb,
a.cccc/a.ccc1  as  ccc,
a.dddd/a.ddd1  as  ddd 


from (select   
  SUM(CASE WHEN b.dchdate BETWEEN '2010-10-01' and '2011-09-30'    THEN  b.daycnt   end ) as aaaa ,
  SUM(CASE WHEN b.dchdate BETWEEN '2010-10-01' and '2011-09-30'    THEN  b.can   end ) as aaa1, 
  SUM(CASE WHEN b.dchdate BETWEEN '2011-10-01' and '2012-09-30'    THEN  b.daycnt   end ) as bbbb , 
   SUM(CASE WHEN b.dchdate BETWEEN '2011-10-01' and '2012-09-30'    THEN  b.can    end ) as bbb1 , 
 SUM(CASE WHEN b.dchdate BETWEEN '2012-10-01' and '2013-09-30'    THEN  b.daycnt   end ) as cccc,
 SUM(CASE WHEN b.dchdate BETWEEN '2012-10-01' and '2013-09-30'    THEN  b.can   end ) as ccc1,
SUM(CASE WHEN b.dchdate BETWEEN '2013-10-01' and '2014-09-30'    THEN  b.daycnt   end ) as dddd  ,
 SUM(CASE WHEN b.dchdate BETWEEN '2013-10-01' and '2014-09-30'    THEN b.can    end ) as ddd1  
from(


SELECT ipt.daycnt, 
	ipt.hn ,
count(ipt.an) as can,
	ipt.dchdate
FROM ipt    where    daycnt <> 0  and   year(ipt.dchdate) between YEAR(CURDATE())-4  and 
YEAR(CURDATE())   GROUP BY ipt.an  ORDER BY   ipt.daycnt DESC  
 ) as  b) as a

UNION

 

   select 'Crude Death Rate',
(b.aaaa*1000)/b.xxx as  aaa,
(b.aaaa2*1000)/b.xxx2 as  bbb,
 (b.aaaa3*1000)/b.xxx3 as  ccc,
 (b.aaaa4*1000)/b.xxx4 as  ddd
 
 
from
(select 
    
count(CASE WHEN a.yeaript between '2010-10-01'and '2011-09-30' and  a.dchtype in(8,9)   THEN  a.an  END) AS 'aaaa' ,
 sum(CASE WHEN a.yeaript between '2010-10-01'and '2011-09-30'    THEN  a.canqq  END) AS 'xxx'  ,
 count(CASE WHEN a.yeaript between '2011-10-01'and '2012-09-30' and  a.dchtype in(8,9)   THEN  a.an  END) AS 'aaaa2' ,
 sum(CASE WHEN a.yeaript between '2011-10-01'and '2012-09-30'   THEN  a.canqq  END) AS 'xxx2'  ,

count(CASE WHEN a.yeaript between '2012-10-01'and '2013-09-30'  and  a.dchtype in(8,9)   THEN  a.an  END) AS 'aaaa3' ,
 sum(CASE WHEN a.yeaript between '2012-10-01'and '2013-09-30'   THEN  a.canqq  END) AS 'xxx3'  ,

 count(CASE WHEN a.yeaript between '2013-10-01'and '2014-09-30'  and  a.dchtype in(8,9)   THEN  a.an  END) AS 'aaaa4' ,
  sum(CASE WHEN a.yeaript between '2013-10-01'and '2014-09-30'    THEN  a.canqq  END) AS 'xxx4'   

 from(

SELECT ipt.vn, 
	count(ipt.an )as canqq, 
    ipt.an,
	ipt.ward, 
	ipt.pttype, 
	ipt.dchdate  as yeaript , 
	year(ipt.dchdate) AS dc, 
     idpm.idpm,
	idpm.nameidpm,
     ipt.dchtype 
FROM idpm INNER JOIN ipt ON idpm.idpm = ipt.ward
WHERE year(ipt.dchdate)  between YEAR(CURDATE())-4  and 
YEAR(CURDATE())  GROUP BY an    ) as a) as b
UNION
 

select 'อัตราส่วนใน ต่อ นอก',

(b.aaaaa1*100)/aaaaa as aaa,

(b.bbbbb1*100)/bbbbb as bbb,

(b.ccccc1*100)/ccccc as ccc,
(b.ddddd1*100)/ddddd as ddd 




from(select  



SUM(CASE WHEN date(a.vstdttm) BETWEEN '2011-10-01' and '2012-09-30'   and a.ovstost <> '4' and a.an = 0  THEN  a.cvn   end ) as aaaaa  ,
SUM(CASE WHEN date(a.vstdttm) BETWEEN '2011-10-01' and '2012-09-30'   and a.ovstost  = '4'    THEN  a.cvn   end ) as aaaaa1 ,


SUM(CASE WHEN date(a.vstdttm) BETWEEN '2012-10-01' and '2013-09-30'   and a.ovstost <> '4' and a.an = 0  THEN  a.cvn   end ) as bbbbb,
SUM(CASE WHEN date(a.vstdttm) BETWEEN '2012-10-01' and '2013-09-30'   and a.ovstost  = '4'    THEN  a.cvn   end ) as bbbbb1 ,

SUM(CASE WHEN date(a.vstdttm) BETWEEN '2013-10-01' and '2014-09-30'   and a.ovstost <> '4' and a.an = 0  THEN  a.cvn   end ) as ccccc  ,
SUM(CASE WHEN date(a.vstdttm) BETWEEN '2013-10-01' and '2014-09-30'   and a.ovstost  = '4'    THEN  a.cvn   end ) as ccccc1 
SUM(CASE WHEN date(a.vstdttm) BETWEEN '2010-10-01' and '2011-09-30'   and a.ovstost <> '4' and a.an = 0  THEN  a.cvn   end ) as ddddd  ,
 
SUM(CASE WHEN date(a.vstdttm) BETWEEN '2010-10-01' and '2011-09-30'   and a.ovstost  = '4'    THEN  a.cvn   end ) as ddddd1  ,


  from(select 1
      count(ovst.vn) as cvn,
      ovst.an,
       ovst.vstdttm,
        ovst.vn,
        ovst.ovstost

      FROM 
          ovst 

 where   year(ovst.vstdttm) BETWEEN '2011' and  '2015'   group by vn) as  a) as b

union


select 'readmitted',
 
SUM(CASE WHEN d.yeaript between '2011-10-01'and '2012-09-30' THEN (d.can*100)/40111 END) AS 'aaa' ,
 SUM(CASE WHEN d.yeaript between '2012-10-01'and '2013-09-30' THEN (d.can*100)/39749 END) AS 'bbb' ,
SUM(CASE WHEN d.yeaript between '2013-10-01'and '2014-09-30' THEN (d.can*100)/49042 END) AS 'ccc',
SUM(CASE WHEN d.yeaript between '2014-10-01'and '2015-09-30' THEN (d.can*100)/37230 END) AS 'ddd' 

 

from
(select
 c.aadchdate,
count(c.aan) as can

,c.xx,
c.hn,
c.rgtdate  as yeaript
from(

select  DATEDIFF(b.rgtdate,b.aadchdate) as xx,
   
b.aadchdate,
b.aan ,
b.hn,

b.rgtdate
from

(select  
    a.aan,
 
a.hn,
a.aadchdate,
ipt.rgtdate
 

from
(SELECT  
 ipt.dchdate  as aadchdate, 
	ipt.dchdate adchdate, 
count(ipt.hn)  as ahn ,
   ipt.an as aan,
  ipt.hn 
FROM ipt 
  

  where  year(ipt.dchdate)  between '2011'  and  '2015'  
GROUP BY  hn  ) as a  


 inner join ipt on ipt.hn = a.hn  
where  a.ahn  > 1   and  year(ipt.dchdate)  between '2011'  and  '2015' 
 

 ORDER BY   hn, dchdate   asc  ) as b   ) as c  where   c.xx   between  '1'  and  '28'  GROUP BY  c.aadchdate,c.rgtdate, hn,xx)  as d






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
				
				 
				
				'total bed'=> $row['total bed'],
		          'aaa'=> $row['aaa'],
		          'bbb'=> $row['bbb'],
				  'ccc'=> $row['ccc'],
				   'ddd'=> $row['ddd'],
		 
		 
		 
		 
		 
		 
		 
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