 

<?php 



error_reporting(0);

//include_once 'db.php';

 include_once '../config/connect_hisql.php';
    
include_once '../config/datetype.php';
  

  $connect =connectToDB();


	  $day1 = date("d")+1;

    $month1 = date("m");

    $year1 = date("Y");
	          $day2 =  $year1.'-'.$month1.'-'.$day1;
	 
	 

 
$query="

SELECT job_nurse.job_date, 
	
 ((((job_total+job_add)-job_refer)-job_escape)-job_dead_au)-job_add as job_end_m2,
	

         job_nurse.idpm, 
	job_nurse.nameidpm, 
	

    job_nurse.job_total, 
    job_nurse.job_born,
	job_nurse.job_add, 
	job_nurse.job_dischg, 
	job_nurse.job_refer, 
	job_nurse.job_escape, 
	job_nurse.job_dead_au,
job_nurse.job_move_out,
job_nurse.job_move_in,


job_total+((((((job_add-job_refer)-job_dischg)-job_escape)-job_dead_au)-job_move_out)+job_born)  As job_end_m
FROM job_nurse   
	where      DATEDIFF(NOW(),job_nurse.job_date) =1     
AND job_nurse.type_job ='2'
ORDER BY   job_end_m2   desc";
	
	
	

	  
	
	
	
	
	 
	
	 
		 	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	 

	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$data[] = array(
			 
				 
			  
				
		 
		        
				 'idpm'=>  iconv('TIS-620','UTF-8//IGNORE',$row['idpm']),
				  'nameidpm'=>  iconv('TIS-620','UTF-8//IGNORE',$row['nameidpm']),
				  'job_total'=> $row['job_total'] ,
				      'job_born'=> $row['job_born'] ,
				  'job_add'=> $row['job_add'] ,
                                    'job_dischg'=> $row['job_dischg'] ,
                                   'job_refer'=> $row['job_refer'] ,
		 
		  'job_escape'=> $row['job_escape'] ,
		  'job_dead_au'=> $row['job_dead_au'] ,
                     'job_move_out'=> $row['job_move_out'] ,
                       'job_move_in'=> $row['job_move_in'] ,




		   'job_end_m'=> $row['job_end_m'] 
		 
		 
		 
		 
		  );
	}
	
  
	$js25= json_encode($data);
	
	echo  $js25; 
	
	
	
?>

 