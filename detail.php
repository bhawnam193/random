<?php
$host="localhost";
$uname="root";
$pwd="";
$link=mysql_connect($host,$uname,$pwd);
mysql_select_db("dbemployee1030",$link);
if(isset($_REQUEST["bid"]))
{
    $bid=$_REQUEST["bid"];
    $qry="select * from tbbook where bookid='$bid'";
    $res=mysql_query($qry);
    if($r=mysql_fetch_row($res))
    {
        echo"title:$r[1]<br>";
        echo"author:$r[2]<br>";
        echo"pub:$r[3]<br>";
        echo"price:$r[4]<br>";
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
