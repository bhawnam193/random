
<?php
$host="localhost";
$uname="root";
$pwd="";
$link=mysql_connect($host,$uname,$pwd);
mysql_select_db("dbemployee1030",$link);
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="f1" action="assignment1.php" method="POST">
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
                      echo"title:$r[1]<br>";
                      echo"author:$r[2]<br>";
                      echo"pub:$r[3]<br>";
                      echo"price:$r[4]<br>";
                      echo'</td>';
                      if($i==1)
                      {
                          echo'<tr>';
                      }
              }
              ?>  
            </table>
        </form>
     </body>
</html>

