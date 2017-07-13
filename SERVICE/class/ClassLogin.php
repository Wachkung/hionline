<?php

     session_start();

     ob_start();

   

    class dbconnect{

                var $h = "localhost";

                var $db = "history";

                var $u = "root";

                var $p = "v84s67";

                var $c;

                var $rs;

 

                function Connection()

                 {  $this->c = mysql_connect($this->h, $this->u, $this->p);

                       if (!$this->c)

                          { die('Could not connect : ' . mysql_error()); }

                             mysql_select_db($this->db, $this->c);

                             mysql_query("SET NAMES 'tis620' ",$this->c);

                }             

               

                function Execute($sql)

                 {  $this->rs = mysql_query($sql,$this->c);

                     if(!$this->rs) die(" Error Select Statement :: $sql");

                        return mysql_fetch_array($this->rs);

                 }

                       

                 function login($username ,$password)

                 {  $sql = "select * from admin where username='" . $username . "' and passcode ='" . $password . "'";

                     $rs = $this->Execute($sql);

                     if (count($rs)!=1)  //  มีข้อมูล

                      {       $_SESSION['empno'] = $rs['empno'];

                               $_SESSION['ename'] = $rs['ename'];

                               $_SESSION['levelusing'] = $rs['levelusing'];  

                              switch( $rs['levelusing'])

                              {      case"a" :  

                                                              header("Location:menu_admin.php");   break ;

                                         case "u" : 

                                                             header("Location:http:menu_user.php"); break ;

                                }

                     } 

                else

                     echo "<br> Account Not  Access ";

               }

   

             function Disconnect()

                  {            return mysql_close(); } 

                 

    } // End Class

?>