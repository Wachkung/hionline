<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
<title>�����Ż���ѵԡ�����Ѻ��ԡ��</title>
</head>
<?php
 
function CONNECTDBF($DB){
  $dsn = "Driver={Microsoft Visual Foxpro Driver};SourceType=dbf;SourceDB=$DB";
  $cn = odbc_connect($dsn,'','') or die("?????????????????????(".$DB.")");
  if (!$cn) 
  {
    exit("Error ".odbc_error()." ! - ".odbc_errormsg().".");
  }
  return $cn;
}
 
?>
</html>