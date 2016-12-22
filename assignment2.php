<?php
$host="localhost";
$uname="root";
$pwd="";
$link=mysql_connect($host,$uname,$pwd);
mysql_select_db("dbemployee1030",$link);
if(isset($_POST["btnsubmit"]))
{
    $ch=$_POST["chk"];
    foreach ($ch as $value)
    {
        if(isset($st))
        {
            $st=$st.",".$value;
         }
 else 
 {
     $st=$value;
 }
    }
   // echo $st;
    $qry="select * from tbbook where id in($st)";
    //echo $qry;
    $res=mysql_query($qry)or die(mysql_error());
    while($r=mysql_fetch_row($res))
        
    {
        echo"title:$r[1]<br>";
        echo"author:$r[2]<br>";
        echo"pub:$r[3]<br>";
        echo"price:$r[4]<br>";
        echo'***********<br>';
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="f1" action="assignment2.php" method="POST">
            <table border="5">
                <?php
                $qry="select * from tbbook";
                $res=mysql_query($qry);
                $i=1;
                while($r=mysql_fetch_row($res))
                {
                    $i++;
                    if($i==2)
                    {
                        echo'<tr>';
                        $i=0;
                    }
                    echo'<td>';
                    echo"<img.src=$r[5] height=50 width=50/>";
                    echo'</td>';
                    echo'<td>';
                    echo"title:$r[1]<br>";
                    echo"author:$r[2]<br>";
                    echo"pub:$r[3]<br>";
                    echo"price:$r[4]<br>";
                    echo"<input type=checkbox name=chk[] value=$r[0] >buy";
                    echo'</td>';
                    if($i==1)
                        echo'<tr>';
                }
                ?>
                
            </table>
            <input type="submit" name="btnsubmit" value="submit"/>
          </form>
      </body>
</html>
