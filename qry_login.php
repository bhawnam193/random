<?php
if(isset($_POST["b1"]))
{
    $u=$_POST["t1"];
    $p=$_POST["t2"];
    if($u=="abc" && $p=="xyz")
    {
        header("location:qry_loginprf.php? un=$u&up=$p");
    }
 else
     {
     echo'wrong user/password';   
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="qry_login.php" method="POST">
            <table border="5">
                <tr>
                    <td>username :</td>
                    <td><input type="text" name="t1"/></td>
                </tr>
                <tr>
                    <td>password :</td>
                     <td><input type="password" name="t2"/></td>
                 </tr>
                 <tr>
                     <td colspan="2">
                      <input type="submit" name="b1" value="login"/>
                   </td>
                 </tr>
            </table>
        </form>
    </body>
</html>
