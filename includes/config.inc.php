<?php
$titleweb = "TanSumHospital : �ç��Һ�ŵ�����"; //
$strdate = "2015-10-01";
$enddate = "2016-09-30";


$todays = date("Y-m-d");
$dtimenow = date("Y-m-d H:i:s");

$ThaiMonth = array( "���Ҥ�","����Ҿѹ��","�չҤ�","����¹","����Ҥ�","�Զع�¹","�á�Ҥ�","�ԧ�Ҥ�","�ѹ��¹","���Ҥ�","��Ȩԡ�¹","�ѹ�Ҥ�");
$ThaiSubMonth = array("�.�.","�.�.","��.�.","��.�.","�.�.","��.�.","�.�.","�.�.","�.�.","�.�.","�.�.","�.�.");
/*�ѧ���蹵Ѵʵ�ԧ�ŧ�ѹ�������Ẻ��� ������ҧ�ٻẺʵ�ԧ����� 2001-07-16 23:53:11*/
function SortThaiDate($txt)
				 {
				      global $ThaiSubMonth;
							$Year = substr( substr( $txt,0 ,4)+543, -2);
							$Month = substr( $txt, 4, 2);
							$DayNo = substr( $txt, 6, 2);
							// $Month = $Month - 1;
						 return $DayNo."/".$Month."/".$Year;									 
				 }					
/*�ѧ���蹵Ѵʵ�ԧ�ŧ�ѹ�������Ẻ��� ������ҧ�ٻẺʵ�ԧ����� 2001-07-16 23:53:11*/
function LongThaiDate($txt)
				 {
				      global $ThaiMonth;
							$Year = substr( $txt,0 ,4)+543;
							$Month = substr( $txt,5, 2);
							$DayNo = substr( $txt, 8, 2);
							$Ttime = substr( $txt, 11, 5);
							$Month = $Month - 1;
						 return $DayNo."  ".$ThaiMonth[$Month]."  ".$Year." ".$Ttime;						 
				 }
				 
function LongThaiDatenotime($txt)
				 {
				      global $ThaiMonth;
							$Year = substr( $txt,0 ,4)+543;
							$Month = substr( $txt,5, 2);
							$DayNo = substr( $txt, 8, 2);
							$Ttime = substr( $txt, 11, 5);
							$Month = $Month - 1;
						 return $DayNo."  ".$ThaiMonth[$Month]."  ".$Year;						 
				 }
				 
				 					
//�����ش���¢ͧ��͹
function lastday($mon){
list($y, $m) = explode("/", $mon);
$m = $m+1; if($m==13){ $y=$y+1; $m=1; }
$newdate = mktime(12, 0, 0, $m, 1, $y);
$newdate = strtotime("-1 day", $newdate);
$newdate = date("Y-m-d", $newdate);
return($newdate);
}
				 
function retDate($add){ //�ŧ����ѹ��� �ҡ 01/12/2552 �� 2009-12-01
		$strd = substr($add,0,2);
		$strm = substr($add,3,2);
		$stryT = substr($add,6,4);
		$stry = $stryT - 543;
		$str = $stry."-".$strm."-".$strd;
		return $str;
}
function retDatets($add){ //�ŧ����ѹ��� �ҡ 2009-12-01  ��  01/12/2552  
		$strd = substr($add,8,2);
		$strm = substr($add,5,2);
		$stryT = substr($add,0,4);
		$stry = $stryT + 543;
		$str = $strd."/".$strm."/".$stry;
		return $str;
}
function redatexx($add){ //�ŧ����ѹ��� �ҡ 2009-12-01  ��  01/12/2552  
		$strd = substr($add,8,2);
		$strm = substr($add,5,2);
		$stryT = substr($add,0,4);
		$stry = $stryT + 543;
		$stryto = substr($stry,2,2);
		$str = $strd."/".$strm."/".$stryto;
		return $str;
}

function retDatet18($add){ //�ŧ����ѹ��� �ҡ 20091201  ��  01/12/2552  
	if($add != ''){
		$strd = substr($add,6,2);
		$strm = substr($add,4,2);
		$stryT = substr($add,0,4);
		$stry = $stryT + 543;
		$str = $strd."/".$strm."/".$stry;
		return $str;
	}
}
function retDatet19($add){ //�ŧ����ѹ��� �ҡ 01/12/2552  ��  20091201
	if($add != ''){
		$strd = substr($add,0,2);
		$strm = substr($add,3,2);
		$stryT = substr($add,6,4);
		$stry = $stryT - 543;
		$str = $stry."".$strm."".$strd;
		return $str;
	}
}
function retDatet20($add){ //�ŧ����ѹ��� �ҡ 20091201  ��  2009-12-01
	if($add != ''){
		$strd = substr($add,6,2);
		$strm = substr($add,4,2);
		$stryT = substr($add,0,4);
		$stry = $stryT;
		$stry = substr($stry,-2);
		$str = $stryT."-".$strm."-".$strd;
		return $str;
	}
}							 




?>
