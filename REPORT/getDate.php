<?php   
header("Content-type:text/html; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false);       
if($_GET['rev']==1){
	
	$day=date("d");

	$month=date("m");

	$yearthai=date("Y")+543;

 switch ($month) {
       case 1:
        echo "วันที่ : $day มกราคม $yearthai ";
        break;
    case 2:
         echo "วันที่ : $day กุมภาพันธ์ $yearthai ";
        break;
  case 3:
         echo "วันที่ : $day มีนาคม $yearthai ";
        break;
    case 4:
         echo "วันที่ : $day เมษายน $yearthai ";
        break;
 case 5:
         echo "วันที่ : $day พฤษภาคม $yearthai ";
        break;
    case 6:
         echo "วันที่ : $day มิถุนายน $yearthai ";
        break;
		    case 7:
        echo "วันที่ : $day กรกฏาคม $yearthai ";
        break;
		   case 8:
        echo "วันที่ : $day สิงหาคม $yearthai ";
        break;
			   case 9:
         echo "วันที่ : $day กันยายน $yearthai ";
        break;
			    case 10:
         echo "วันที่ : $day ตุลาคม $yearthai ";
        break;
				    case 11:
        echo "วันที่ : $day พฤษจิกายน $yearthai ";
        break;
				    case 12:
        echo "วันที่ : $day ธันวาคม $yearthai ";
        break;
}

	//

	
	exit;
}
?>