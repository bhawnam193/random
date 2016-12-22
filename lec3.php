<?php
$host="localhost";
$username="root";
$password="";
$link= mysql_connect($host,$username,$password,"");
mysql_select_db("dbemployee1030",$link);
$eno="";
$en="";
$ed="";
$es="";
if(isset($_POST["btnsave"]))
{
    $eno=$_POST["txtempno"];
    $en=$_POST["txtename"];
    $ed=$_POST["txteadd"];
    $es=$_POST["txtesal"];
    $qry="insert tbemp values('$eno','$en','$ed','$es')";
    $res=  mysql_query($qry);
    if(mysql_affected_rows()==1)
    {
      echo'data saved';
    }
    else
    {
        echo'data not saved';
    }
}
if(isset($_REQUEST["code"]))
{
    $a=$_REQUEST["code"];
    $qry="select * from tbemp where empno='$a'";
    $res=mysql_query($qry) or die(mysql_error());
    if($r=  mysql_fetch_row($res))
    {
        $eno=$r[0];
        $en=$r[1];
        $ed=$r[2];
        $es=$r[3];
    }

}
if(isset($_POST["btnupdate"]))
{
    $empno=$_POST["txtempno"];
    $ename=$_POST["txtename"];
    $eadd=$_POST["txteadd"];
    $esal=$_POST["txtesal"];
    $qry= "update tbemp set ename='$ename',eadd='$eadd',esal='$esal' where empno='$empno'";
    $res=  mysql_query($qry);
    if(mysql_affected_rows()==1)
    {
        echo'data updated';
   }
 else {
      echo'data not updated'; 
   }
}
if(isset($_POST["btndelete"]))
{
    $eno=$_POST["txtempno"];
    $qry="delete from tbemp where empno='$eno'";
    $res=mysql_query($qry);
    if(mysql_affected_rows()==1)
    {
        echo'data deleted';
    }
    else
    {
        echo'data not deleted';
    }
}
    ?>
<html>
    <body>
        <form name="f1" action="lec3.php" method="POST">
            <table border="5"
                   <tr>
                    <td>Empno :</td>
                    
                    <input type="text" name="txtempno" value="<?php if(isset($eno))echo $eno;?>"/>
                </tr>
                <tr>
                    <td>Name :</td>
                   
                    <input type="text" name="txtename" value="<?php if(isset($en))echo $en;?>"/>
                </tr>
                <tr>
                    <td>Address :</td>
                    
                    <input type="text" name="txteadd" value="<?php if(isset($ed))echo $ed;?>"/>
                </tr>
                <tr>
                    <td>Salary :</td>
                   
                    <input type="text" name="txtesal" value="<?php if(isset($es))echo $es;?>"/>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                        $qry="select * from tbemp";
                        //$qry="select empno,ename from tbemp";
                        $res= mysql_query($qry) or die(mysql_error());
                        while($r=mysql_fetch_row($res))
                        {
                            //echo$r[1].'<br>';
                            //echo"<a href=lec3.php">1 $r [1]</a>'<br>';
                            echo"<a href=lec3.php?code=$r[0]>$r[1]</a><br>";
                        }
                        ?>
                    </td>
                    <tr>
                        <td>
                 <input type="submit" name="btnsave" value="save"/>
                        <input type="submit" name="btnupdate" value="update"/>
                        <input type="submit" name="btndelete" value="delete"/>
                    </td>
                </tr>
        </table>
       </form>
    </body>
</html>
