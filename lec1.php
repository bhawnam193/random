<?php
if(isset($_POST["btnsub"]))
{
    $en=$_POST["textname"];
    $es=$_POST["textesalary"];
    $hra=$_POST["texthra"];
    $da=$_POST["textda"];
    $ta=$_POST["textta"];
    $ns=$es+$hra+$da+$ta;
    echo"net salary:$ns";
}
?>
<html>
    <body>
        <form name="f1" action="lec1.php" method="post">
            <table border="5">
                <tr>
                    <td>name:</td>
                    <td><input type="text" name="textname"/></td>
                </tr>
                <tr>
                    <td>salary:</td>
                    <td><input type="text" name="textesalary"/></td>
                    
                </tr>
                <tr>
                    <td>hra:</td>
                    <td><input type="text" name="texthra"/></td>
                    
                </tr>
                <tr>
                    <td>da:</td>
                    <td><input type="text" name="textda"/></td>
                    
                </tr>
                <tr>
                    <td>ta:</td>
                    <td><input type="text"name="textta"/></td>
                    
                </tr>
                <tr>
                    <td> net salary:</td>
                    <td> <?php if(isset($ns))echo $ns;?></td>
                </tr>
                <tr>
                    <td> net salary:</td>
                    <td><input type="text" name="textns" value="<?php if(isset($ns))echo $ns;?>"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btnsub" value="submit"/>
                    </td>
                </tr>
    </body>
</html>
