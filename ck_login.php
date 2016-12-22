<?php
if(isset($_POST["b1"]))
{
    $u=$_POST["t1"];
    $p=$_POST["t2"];
    if ($u=="abc" && $p=="xyz")
    {
        
        setcookie("un",$u,time()+3600*24*30);
        setcookie("up",$p,time()+3600*24*30);
        header("location:ck_loginprf.php");
    }
 else 
     {
     echo'wrong user/pwd';
 }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="ck_login.php" method="POST">
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
                       <input type="submit" value="login" name="b1"/>
                   </td>
               </tr>
            </table>
        </form>
    </body>
</html>
