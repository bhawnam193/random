<?php
if(isset($_REQUEST["un"])&&isset($_REQUEST["up"]))
{
    echo'welcome :'.$_REQUEST["un"];
}
 else 
     {
    header("location:qry_login.php");
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
