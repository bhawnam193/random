<?php
session_start();
include_once'conn.php';
if(isset($_POST["b1"]))
{
    $arr=array();
    $arr[0]="amit";
    $arr[1]="vikas";
    $arr[2]="raman";
    $arr[3]="daman";
    $_SESSION["SS"]=$arr;
    header("location:sess_empdet.php");
}
if(isset($_POST["b2"]))
{
    $qry="select * from tbemp";
    $res=mysql_query($qry);
    $ar=array();
    $i=0;
    while($r=mysql_fetch_array($res))
    {
        $ar[$i]=$r[0]."".$r[1]."".$r[2]."".$r[3];
        $i++;
    }
    $_SESSION["SS1"]=$ar;
    header("location:sess_empdet.php");
}
if(isset($_POST["b3"]))
{
    $qry="select * from tbemp";
    $res=mysql_query($qry);
    $ar=array();
    $i=0;
    while($r=  mysql_fetch_row($res))
    {
        $ar[$i]=$r;
        $i++;
    }
    $_SESSION["SS2"]=$ar;
   header("location:sess_empdet.php");
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="sess_emp.php" method="POST">
            <input type="submit" value="session Array" name="b1"/>
            <input type="submit" value="session Database" name="b2"/>
            <input type="submit" value="session db" name="b3"/>
        </form>
    </body>
</html>
