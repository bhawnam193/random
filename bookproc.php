<?php
$host="localhost";
$uname="root";
$pwd="";
$link=mysql_connect($host,$uname,$pwd);
mysql_select_db("dbemployee1030",$link);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="f1" action="bookproc.php" method="POST">
            <table border="5">
                <?php
                $qry="select * from tbbook";
                $res=mysql_query($qry);
                while($r=mysql_fetch_row($res))
                
                    {
                    echo'<tr>';
                    echo'<td>';
                    echo"title:$r[1]<br>";
                    echo"author:$r[2]<br>";
                    echo"pub:$r[3]<br>";
                    echo"price:$r[4]";
                    echo'</td>';
                    echo'</tr>';
                    }
                 ?>
            </table>
        </form>
    </body>
</html>
