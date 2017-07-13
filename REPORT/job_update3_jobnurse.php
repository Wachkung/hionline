 

<?php 



error_reporting(0);

 

 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';
  

  $connect =connectToDB();

	  $day1 = date("d")+1;

    $month1 = date("m");

    $year1 = date("Y");
	          $day2 =  $year1.'-'.$month1.'-'.$day1;

 
$query="


  update job_nurse pos,
(select t1.ward,t1.rgtdate,
t2.ans2  as admit,t3.ans2 as dishc ,t4.ans2 as refer,
t5.ans2 as dead,t6.ans2 as escp 
 
from 

(
select
a.ward,
idpm.nameidpm,
sum(a.cns) as ans2,
a.rgtdate

 
from(SELECT ipt.vn, 
	count(ipt.an) as cns, 
	ipt.hn, 
	ipt.rgtdate, 
	ipt.dchdate, 
	ipt.ward, 
	ipt.dchtype,
      ipt.an,
ipt.rgttime
FROM ipt
WHERE  ipt.dchdate ='0000-00-00' and
  ipt.dchtype in('0') and ipt.ward !=''
 and  DATE_FORMAT(ipt.rgtdate,'%Y') between DATE_FORMAT(NOW(),'%Y')  and DATE_FORMAT(NOW(),'%Y')
  and  DATE_FORMAT(ipt.rgtdate,'%m') between DATE_FORMAT(NOW(),'%m')-2 and  DATE_FORMAT(NOW(),'%m')
   
and DATE_FORMAT(ipt.rgtdate,'%d') between  DATE_FORMAT(ipt.rgtdate,'%d')-60   and   DATE_FORMAT(NOW(),'%d')  

 

GROUP BY ipt.an
 ) as a  
INNER JOIN idpm on idpm.idpm = a.ward  GROUP BY a.ward   
) as t1

left join 
(

select
a.ward,
idpm.nameidpm,
sum(a.cns) as ans2,
a.rgtdate
 
from(SELECT ipt.vn, 
	count(ipt.an) as cns, 
	ipt.hn, 
	ipt.rgtdate, 
	ipt.dchdate, 
	ipt.ward, 
	ipt.dchtype,
      ipt.an,
ipt.rgttime
FROM ipt
WHERE   ipt.rgtdate=CURDATE() and
  ipt.dchtype in('0') and ipt.ward!=''  and ipt.rgttime BETWEEN '1' and '724'

GROUP BY ipt.an
 ) as a  
INNER JOIN idpm on idpm.idpm = a.ward  GROUP BY a.ward  
) as t2 on t1.ward=t2.ward



left join 
(

select
a.ward,
idpm.nameidpm,
sum(a.cns) as ans2,
 a.rgtdate
from(SELECT ipt.vn, 
	count(ipt.an) as cns, 
	ipt.hn, 
	ipt.rgtdate, 
	ipt.dchdate, 
	ipt.ward, 
	ipt.dchtype,
      ipt.an,
ipt.rgttime
FROM ipt

WHERE   ipt.dchdate =CURDATE() and
  ipt.dchtype in('1','2') and ipt.ward!=''  and ipt.dchtime BETWEEN  '1' and '724'
GROUP BY ipt.an
 ) as a  
INNER JOIN idpm on idpm.idpm = a.ward  GROUP BY a.ward  
) as t3 on t1.ward=t3.ward

 

left join 
(

select
a.ward,
idpm.nameidpm,
sum(a.cns) as ans2,
 a.rgtdate
from(SELECT ipt.vn, 
	count(ipt.an) as cns, 
	ipt.hn, 
	ipt.rgtdate, 
	ipt.dchdate, 
	ipt.ward, 
	ipt.dchtype,
      ipt.an,
ipt.rgttime
FROM ipt

WHERE   ipt.dchdate =CURDATE() and
  ipt.dchtype ='4' and ipt.ward!=''  and ipt.dchtime BETWEEN  '1' and '724'

GROUP BY ipt.an
 ) as a  
INNER JOIN idpm on idpm.idpm = a.ward  GROUP BY a.ward  
) as t4 on t1.ward=t4.ward

 

left join 
(

select
a.ward,
idpm.nameidpm,
sum(a.cns) as ans2,
a.rgtdate
 
from(SELECT ipt.vn, 
	count(ipt.an) as cns, 
	ipt.hn, 
	ipt.rgtdate, 
	ipt.dchdate, 
	ipt.ward, 
	ipt.dchtype,
      ipt.an,
ipt.rgttime
FROM ipt

WHERE   ipt.dchdate =CURDATE() and
  ipt.dchtype in('8','9') and ipt.ward!=''  and ipt.dchtime BETWEEN  '1' and '724'

GROUP BY ipt.an
 ) as a  
INNER JOIN idpm on idpm.idpm = a.ward  GROUP BY a.ward  
) as t5 on t1.ward=t5.ward
left join 
(

select
a.ward,
idpm.nameidpm,
sum(a.cns) as ans2,
a.rgtdate
 
from(SELECT ipt.vn, 
	count(ipt.an) as cns, 
	ipt.hn, 
	ipt.rgtdate, 
	ipt.dchdate, 
	ipt.ward, 
	ipt.dchtype,
      ipt.an,
ipt.rgttime
FROM ipt

WHERE   ipt.dchdate =CURDATE() and
  ipt.dchtype in('3') and ipt.ward!=''  and ipt.dchtime BETWEEN '1' and '724'
GROUP BY ipt.an
 ) as a  
INNER JOIN idpm on idpm.idpm = a.ward  GROUP BY a.ward  
) as t6 on t1.ward=t6.ward  ) as ddd
set pos.job_add  = ddd.admit,
    pos.job_dischg  = ddd.dishc,
    pos.job_refer  = ddd.refer,
    pos.job_dead_au  = ddd.dead,
    pos.job_escape    =  ddd.escp

where  pos.idpm= ddd.ward
   and  pos.type_job = '3'
";
	  
		 
	 

	 
             

$sql3 ="


update job_nurse pos,
(SELECT
iptmove.moveout,
iptmove.an,
iptmove.vn,
iptmove.timein,
iptmove.srvdate,
iptmove.wardnew,
sum(iptmove.movein) as movein
FROM
iptmove
left JOIN ipt ON ipt.an = iptmove.an AND iptmove.wardnew = ipt.ward AND iptmove.vn = ipt.vn
and iptmove.timein BETWEEN '1' and '724'

WHERE
 
iptmove.movein = '1' 
and iptmove.srvdate = CURDATE()  group by  iptmove.wardnew


 ) as ddd
set pos.job_move_in = ddd.movein

where  pos.idpm= ddd.wardnew
and  pos.type_job = '3'
and  pos.job_date = CURDATE()


  ";


    $sql4="

update job_nurse pos,
(SELECT
 
iptmove.an,
iptmove.vn,
iptmove.srvtime,
iptmove.srvdate,
iptmove.wardold,
sum(iptmove.moveout)as moveout
FROM
iptmove
left JOIN ipt ON ipt.an = iptmove.an AND iptmove.wardold = ipt.ward AND iptmove.vn = ipt.vn
and iptmove.srvtime BETWEEN '1' and '724'

WHERE
 
iptmove.moveout = '1' 
and iptmove.srvdate = CURDATE()   group by  iptmove.wardold


 ) as ddd
set pos.job_move_out = ddd.moveout

where  pos.idpm= ddd.wardold
and  pos.type_job = '3'
and  pos.job_date = CURDATE()





";


$sql5="



update job_nurse pos,
(
select 
sum(a.chn) as cbn2

from
( SELECT count(ipt.hn) AS chn, 
	ipt.ward, 
	ipt.rgtdate, 
	child.brthdate, 
	child.brthtime, 
	ipt.hn, 
	ipt.dchtype, 
	ipt.dchtime
FROM
child
LEFT OUTER JOIN ipt ON child.hn = ipt.hn AND ipt.rgtdate = child.brthdate
WHERE child.brthdate = CURDATE() 
       
          
       and child.brthtime  between '1' and '724') as a) as b



set pos.job_born = b.cbn2
  where 
pos.type_job = '3'
and pos.idpm = '01'
and  pos.job_date = CURDATE()


";





           
              $query2="         
                        
 INSERT INTO hi.job_nurse (job_nurse.id_job,job_nurse.job_date,job_nurse.job_time,job_nurse.idpm,job_nurse.nameidpm,job_nurse.job_total,type_job)
select
null,

DATE_FORMAT(NOW(),'%Y-%m-%d')  as job_date,
DATE_FORMAT(NOW(),'%H:%i:%s')  as job_time,
a.idpm   ,
idpm.nameidpm,
job_evening,
'1'
     from(SELECT job_nurse.id_job, 
	job_nurse.job_total+((((((job_nurse.job_add-job_dischg)-job_nurse.job_refer)-job_nurse.job_escape)-job_nurse.job_dead_au)-job_nurse.job_move_out)+job_nurse.job_born) as job_evening,
   job_nurse.job_total, 
	job_nurse.idpm, 
	job_nurse.nameidpm, 
	job_nurse.job_add, 
	job_nurse.job_dischg, 
	job_nurse.job_again, 
	job_nurse.job_refer, 
	job_nurse.job_escape, 
	job_nurse.job_trans, 
	job_nurse.job_other, 
	job_nurse.job_dead_au, 
	job_nurse.job_dead_non_au, 
	job_nurse.job_date
FROM job_nurse  
where job_nurse.job_date = CURDATE()  and job_nurse.type_job ='3') as a                 
                  INNER JOIN idpm on idpm.idpm = a.idpm  GROUP BY a.idpm        
                      ";  
                        	




                        	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
                        
                        
                        
                        $result3 = mysql_query($sql3) or die("SQL Error 1: " . mysql_error());
	
                             $result4 = mysql_query($sql4) or die("SQL Error 1: " . mysql_error());





                             $result5 = mysql_query($sql5) or die("SQL Error 1: " . mysql_error());


                        	$result1 = mysql_query($query2) or die("SQL Error 1: " . mysql_error());
                        
	
                         echo "please wait while you are redirected"; 
  
   
   echo "<meta http-equiv='refresh' content='10; url=/webhi/moniter/opd/job_moniter.php'>";

	
	
?>

 