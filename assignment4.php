<?php
include_once'conn.php';
function disp()
{
    $qry="select * from tbemp";
    $res=mysql_query($qry);
    echo'<table border="10">';
    echo'<tr><th>empno</th><th>name</th><th>address</th><th>salary</th></tr>';
    while($r=mysql_fetch_row($res))
    {
        echo'<tr>';
        echo"<td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td>";
        }
        echo'</table>';
}
?>
<html>
    <body>
        <form action="assignment4.php" method="post">
            <?php
            disp();
            ?>
        </form>
    </body>
</html>
