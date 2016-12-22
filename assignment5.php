<?php
include_once'conn.php';
function disp_data()
{
     $qry="select * from tbemp";
    $res=mysql_query($qry);
    echo'<table border="10">';
    echo'<tr><th>empno</th><th>name</th><th>address</th><th>salary</th></tr>';
    while($r=mysql_fetch_array($res))
    {
      echo'<tr>';
      echo"<td>$r[empno]</td><td>$r[ename]</td><td>$r[eadd]</td><td>$r[esal]</td>";
      echo'</tr>';
    }
    echo'</table>';
    mysql_data_seek($res,0);
    echo'<table border="6">';
    echo'<tr><th>empno</th><th>name</th><th>address</th><th>salary</th></tr>';
    while($r=mysql_fetch_object($res))
    {
        echo"<tr><td> $r->empno</td><td> $r->ename</td><td> $r->eadd</td><td> $r->esal</td></tr>";
     }
     echo'</table>';
     mysql_data_seek($res,0);
     echo'<table border="6">';
     echo'<tr><th>empno</th><th>name</th><th>address</th><th>salary</th></tr>';
     while($r=mysql_fetch_row($res))
     {
         echo"<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td></tr>";
     }
     echo'</table>';
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        disp_data();
        ?>
    </body>
</html>
