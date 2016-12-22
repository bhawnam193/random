<?php
session_start();
if(isset($_SESSION["SS"]))
{
    $ar=$_SESSION["SS"];
    for($i=0;$i<count($ar);$i++)
    {
        echo$ar[$i].'<br>';
    }
   // print_r($ar);
    if(isset($_SESSION["SS1"]))
    {
        $ar=$_SESSION["SS1"];
        //print_r($ar);
        for($i=0;$i<count($ar);$i++)
        {
            echo $ar[$i].'<br>';
        }
    }
        if(isset($_SESSION["SS2"]))
        {
            $ar=$_SESSION["SS2"];
            //print_r($ar);
            for($i=0;$i<count($ar);$i++)
            {
                echo$ar[$i][0]."".$ar[$i][1]."".$ar[$i][2]."".$ar[$i][3].'<br>';
            }
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
