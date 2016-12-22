<?php
$host="localhost";
$uname="root";
$pwd="";
$link=mysql_connect($host,$uname,$pwd);
mysql_select_db("dbemployee1030",$link);
if(isset($_POST["b1"]))
{
    $eno=$_POST["h1"];
    $en=$_POST["txtename"];
    $ed=$_POST["txteadd"];
    $es=$_POST["txtesal"];
    $dno=$_POST["dep"];
    $dcod=$_POST["dsg"];
    $qry="update tbemployee set ename='$en',eadd='$ed',esal='$es',edno='$dno',edsgcod='$dcod' where empno='$eno'";
    $res=mysql_query($qry)or die(mysql_error());
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
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="f1" action="empdrop.php" method="POST">
            <table border="5">
                <?php
                $qry="select empno,ename,eadd,esal,edno,edsgcod,dname,dsgname from tbemployee a,tbdep b,tbdsg c where a.edno=b.dno and a.edsgcod=c.dsgcod";
                $res=mysql_query($qry);
                while($r=mysql_fetch_row($res))
                {
                    if(!isset($_REQUEST["eno"]))
                    {
                        $a=-1;
                    }
 else 
     {
     $a=$_REQUEST["eno"];
    }
    if($a!=$r[0])
    {
        echo'<tr>';
        echo'<td>';
        echo"name:$r[1]<br>";
        echo"address:$r[2]<br>";
        echo"salary:$r[3]<br>";
        echo"depts:$r[6]<br>";
        echo"dsg:$r[7]<br>";
        echo"<a href=empdrop.php?eno=$r[0]>edit</a>";
        echo'</td>';
        echo'</tr>';
    }
    else
        {
        echo'<tr>';
        echo'<td>';
        echo'name:<input type=text name=txtename value="'.$r[1].'"/><br>';
        echo'address:<input type=text name=txteadd value="'.$r[2].'"/><br>';
        echo'salary:<input type=text name=txtesal value="'.$r[3].'"/><br>';
        echo"depts:<select name=dep>";
        $qrydep="select * from tbdep";
        $resdep=mysql_query($qrydep);
        while($rowdep=mysql_fetch_row($resdep))
        {
            echo"<option value=$rowdep[0]>$rowdep[1]</option>";
        }
        echo"</select><br>";
        echo"dsg<select name=dsg>";
        $qrydsg="select * from tbdsg";
        $resdsg=mysql_query($qrydsg);
        while($rowdsg=mysql_fetch_row($resdsg))
        {
            echo"<option value=$rowdsg[0]>$rowdsg[1]</option";
            
        }
        echo"</select><br>";
        echo '<input type=submit name=b1 value=update>';
        
     }
        
    
                }
                 
                ?>
            </table>
            <input type="hidden" name="h1" value="<?php if(isset($a))echo $a;?>"/>
        </form>
     </body>
</html>
