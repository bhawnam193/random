<?php
if(isset($_COOKIE["un"])&&isset($_COOKIE["up"]))
{
    echo"welcome:".$_COOKIE["un"];
}
 else
     {
    header("location:ck_login.php");
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
