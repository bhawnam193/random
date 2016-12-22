<?php
$host="localhost";
$uname="root";
$pwd="";
$link=mysql_connect($host,$uname,$pwd);
mysql_select_db("dbemployee1030",$link);
if(isset($_POST["btnupdate"]))
{
    $eno=$_POST["h1"];
    $en=$_POST["txtename"];
    $ed=$_POST["txteadd"];
    $es=$_POST["txtesal"];
    $qry="update tbemp set ename='$en',eadd='$ed',esal='$es' where empno='$eno'";
    $res= mysql_query($qry);
    if(mysql_affected_rows()==1)
    {
        echo'data updated';
    }
 else
     {
     echo'data not updated';   
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="f1" action="empedit.php" method="POST">
            <table border="5">
                <?php
                $qry="select * from tbemp";
                $res=mysql_query($qry);
                while($r=mysql_fetch_row($res))
                {
                    if(!isset($_REQUEST["eno"]))
                    {
                    echo'<tr>';
                    echo'<td>';
                    echo"name :$r[1]<br>";
                    echo"address :$r[2]<br>";
                    echo"salary :$r[3]<br>";
                    echo"<a href=empedit.php?eno=$r[0]>edit</a>";
                    echo'</td>';
                    echo'</tr>';
                }
                else
                    {
                    $a=$_REQUEST["eno"];
                    if($a==$r[0])
                    {
                        echo'<tr>';
                        echo'<td>';
                        echo'name :<input type="text" name="txtename" value="'.$r[1].'"/><br>';
                        echo'address :<input type="text" name="txteadd" value="'.$r[2].'"/><br>';
                        echo'salary :<input type="text" name="txtesal" value="'.$r[3].'"/><br>';
                        echo '<input type="submit" name="btnupdate" value="update"/>';
                        echo '<input type="submit" name="btncancel" value="cancel"/>';
                        echo'</td>';
                        echo'</tr>';
                    }
 else 
 {
     echo'<tr>';
     echo'<td>';
     echo"name : $r[1]<br>";
     echo"address :$r[2]<br>";
     echo"salary :$r[3]<br>";
     echo"<a href=empedit.php?eno=$r[0]>edit</a>";
     echo'</td>';
     echo'</tr>';
    }
                }
                }
                ?>
            </table>
            <input type="hidden" name="h1" value="<?php if(isset($a))echo $a;?>"/>
        </form>
    </body>
</html>
