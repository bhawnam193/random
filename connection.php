<?php
define("SERVER","localhost");
define("UNAME","root");
define("PWD","");
define("PORT","8081");
define("DNAME","dbemployee1030");
class clscon
{
    function __construct() 
      {
        mysql_connect(SERVER,UNAME,PWD,PORT)OR die('unable connect to the server'. mysql_error());
        mysql_select_dbc(DNAME)OR die('unable connect to the database'.  mysql_error());
      }
}

?>
