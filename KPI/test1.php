<?php

   $nowdate = date("Y-m-d");

        //  echo $nowdate .'kkkkkkkkk';"<br>";
          
          
          list($Y, $m, $d) = explode('-', $nowdate);
                   $y10= $Y-15;
                    $y1= $Y-1;
                     
                       $d1='01';
                       $d2='30';
                       $m1='10'; 
                       $m2='09';
          
                 $year1  = "$y1-$m1-$d1";
                 $year2    ="$Y-$m2-$d2";
                 $year10   ="$y10-$m1-$d1";
               //   echo $year1 .'cccc';"<br>";
                 //   echo $year10.'2000';     
                        ?>