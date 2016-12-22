<?php
$host="localhost";
$uname="root";
$pwd="";
$link=mysql_connect($host,$uname,$pwd);
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
    $es=$_POST["txtesalary"];
    $qry="call insemp('$eno','$en','$ed','$es')";
    $res=mysql_query($qry) or die(mysql_error());
    if(mysql_affected_rows()==1)
    {
        echo'data saved';
        }
        else {
            echo'data not saved';
           }
}
if(isset($_REQUEST["empno"]))
{
    $a=$_REQUEST["empno"];
    $qry="call findemp('$a')";
    $res=  mysql_query($qry) or die(mysql_error());
    if($r= mysql_fetch_row($res))
    {
        $eno=$r[0];
        $en=$r[1];
        $ed=$r[2];
        $es=$r[3];
        
    }
        mysql_close($link);
        $link=mysql_connect($host,$uname,$pwd);
        mysql_select_db("dbemployee1030",$link);
        
}
if(isset($_POST["btnupdate"]))
{
    $eno=$_POST["txtempno"];
    $en=$_POST["txtename"];
    $ed=$_POST["txteadd"];
    $es=$_POST["txtesal"];
    $qry="call updemp('$eno','$en','$ed','$es')";
    $res=mysql_query($qry);
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
    $eno1=$_POST["txtempno"];
    $qry="call delemp('$eno1')";
    $res=mysql_query($qry);
    if(mysql_affected_rows()==1)
    {
        echo'data deleted';
        }
        else {
            echo'data not deleted';
        }
}

?>
    

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="f1" action="empproc.php" method="POST">
            <table border="5">
                <tr>
                    <td>Empno :</td>
                    <td><input type="text" name="txtempno" value="<?php if(isset($eno)) echo $eno;?>"/></td>
                </tr>
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="txtename" value="<?php if(isset($en)) echo $en;?>"/></td>
                </tr>
                <tr>
                 <td>Address :</td>
                <td><input type="text" name="txteadd" value="<?php if(isset($ed)) echo $ed;?>"/></td>   
                </tr>
                <tr>
                    <td>Salary :</td>
                    <td><input type="text" name="txtesal" value="<?php if(isset($es)) echo $es;?>"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="save" name="btnsave"/>
                     <input type="submit" value="update" name="btnupdate"/>
                    <input type="submit" value="delete" name="btndelete"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                        $qry="call disemp()";
                        $res=mysql_query($qry)or die(mysql_error());
                        while($r=mysql_fetch_row($res))
                        {
                            echo"<a href=empproc.php?empno=$r[0]>$r[1]</a><br>";
                            
                        }
                        ?>
                    </td>
                        
                    
                </tr>
            </table>
        </form>
    </body>
</html>
