<?php
include_once'conn.php';
function getdata($tname)
{
    $qry="select * from $tname";
    $res=mysql_query($qry)or die(mysql_error());
    $colcount=  mysql_num_fields($res);
    echo'<table border="5">';
    while($r=mysql_fetch_array($res))
    {
        echo'<tr>';
        for($i=0; $i<$colcount;$i++)
        {
            echo"<td>$r[$i]</td>";
          }
          echo'</tr>';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       getdata("tbemp");
       getdata("tbdep");
       getdata("tbdsg");
        ?>
    </body>
</html>
