<!DOCTYPE html>
<html>
    <body onload="startTime()">

        <div id="txt"></div>

        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById("txt").innerHTML = h + ":" + m + ":" + s;
                window.location.href = "update_jobnurse2.php?newdate=" + h + ":" + m + ":" + s;

                var t = setTimeout(function () {
                    startTime()
                }, 500);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }

        </script>



        <?php
        $thisnewdate = $_GET['newdate'];
      //  echo"name: $thisnewdate";
        $dateyear = date("Y");
//$datemonth = date("m") ;
//$dated = date("d") ;
// $olderdate = date('Y-m-d H:i');  
//$dateh =date('H');
//$datei =date('i')+10;
//echo 'hkhjkhkhk'. $date ;

         $insertpointdate = '1:13:00';
         $updatepoint2321 = '22:44:00';
         $updatepoint2322 = '22:45:00';

     //   if (isset($thisnewdate) and $thisnewdate == 
     //           $insertpointdate||$thisnewdate == 
    //            $updatepoint2320||$thisnewdate == 
    //            $updatepoint2320) {

  //                echo'ggggggggg';
  //       }else if  
        
  //        {
         //   echo "<meta http-equiv='refresh' content='10; url=?name=admin&file=member&file=member_mail'>";
            // exit() ; 
   //     }
     
    
  if (isset($thisnewdate) and $thisnewdate ==$insertpointdate)
  {     echo "<meta http-equiv='refresh' content='0; url=http://110.164.209.110/webhi/moniter/opd/insert_jobnurse.php'>";
         echo "ok";     exit()  ;}
  else{    echo "hhh";       }
    if (isset($thisnewdate) and $thisnewdate ==$updatepoint2321)
  {      echo'wait1';}
  else{    "";       }
          if (isset($thisnewdate) and $thisnewdate ==$updatepoint2322)
  {      echo'wait2';}
  else{      "";     }
      



?> 