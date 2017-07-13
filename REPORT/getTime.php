<?php   
header("Content-type:text/html; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false);       
if($_GET['rev']==1){
	
	$day=date("d");

	$month=date("m");

	$time=date("H:i:s");

	$yearthai=date("Y")+543;

 switch ($month) {
       case 1:
        echo "วันที่ : $day มกราคม $yearthai เวลา: $time";
        break;
    case 2:
         echo "วันที่ : $day กุมภาพันธ์ $yearthai เวลา:  $time";
        break;
  case 3:
         echo "วันที่ : $day มีนาคม $yearthai เวลา:  $time";
        break;
    case 4:
         echo "วันที่ : $day เมษายน $yearthai เวลา:  $time";
        break;
 case 5:
         echo "วันที่ : $day พฤษภาคม $yearthai เวลา:  $time";
        break;
    case 6:
         echo "วันที่ : $day มิถุนายน $yearthai เวลา:  $time";
        break;
		    case 7:
        echo "วันที่ : $day กรกฏาคม $yearthai เวลา:  $time";
        break;
		   case 8:
        echo "วันที่ : $day สิงหาคม $yearthai เวลา:  $time";
        break;
			   case 9:
         echo "วันที่ : $day กันยายน $yearthai เวลา:  $time";
        break;
			    case 10:
         echo "วันที่ : $day ตุลาคม $yearthai เวลา:  $time";
        break;
				    case 11:
        echo "วันที่ : $day พฤษจิกายน $yearthai เวลา:  $time";
        break;
				    case 12:
        echo "วันที่ : $day ธันวาคม $yearthai เวลา:  $time";
        break;
}

	//

	
	exit;
}
?>