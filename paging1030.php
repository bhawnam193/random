<?php
include_once'conn.php';
function page_bind($nor)
{
    $qry="select count(id) from tbbook";
    $res=mysql_query($qry);
    $r=  mysql_fetch_array($res);
    $totrec=$r[0];
   // echo $totrec;
    if(!isset($_REQUEST["page"]))
    {
        $pno=0;
        $srec=0;
        }
 else 
     {
     $pno=$_REQUEST["page"];
     $srec=$pno*$nor;
     }
     $rc=$totrec-($pno*$nor);
     $qry1="select * from tbbook limit $srec,$nor";
     $res1=mysql_query($qry1);
     $i=1;
     echo'<table border="5">';
     while($r=mysql_fetch_array($res1))
     {
         $i++;
         if($i==2)
         {
             echo'<tr>';
             $i=0;
         }
         echo'<td>';
       echo"<imgsrc=$r[5] height=50 width=50/>";
     echo'</td>';
     echo'<td>';
     echo"title:$r[1]<br>";
     echo"author:$r[2]<br>";
     echo"pub:$r[3]<br>";
     echo"price:$r[4]<br>";
     echo'</td>';
     if($i==1)
     {
         echo'</tr>';
     }
     }
echo'<tr><td colspan=2>';
if($rc<=$nor)
{
    $prv=$pno-1;
    echo"<a href=paging1030.php?page=$prv>prv</a>";
}
else if($pno>0)
{
}
else if($pno==0)
{
 echo"<a href=paging1030.php?page=1>next</a>";
}
echo'</table>';
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
      page_bind(4);
        ?>
    </body>
</html>
