<?php
if(isset($_POST["btnsubmit"]))
{
    $fn=$_POST["txtfname"];
    $ln=$_POST["txtlname"];
    $gen=$_POST["r1"];
    $game=$_POST["chk"];
    $d1=$_POST["dep"];
    $d2=$_POST["dsg"];
    echo "first name: $fn<br>";
    echo "last name: $ln<br>";
    echo "gender: $gen<br>";
    echo "game: <br>";
    foreach ($game as $val)
    {
        echo $val."<br>";
    }
    echo "depts:$d1<br>";
    echo "dsg:$d2<br>";
   }
?>
<html>
    <body>
        <form name="f1" action="lec2.php" method="POST">
            <table border="5">
                <tr>
                    <td>first name:</td>
                    <td><input type="text" name="txtfname"/></td>
                    </tr>
                    <tr>
                        <td>last name:</td>
                        <td><input type="text" name="txtlname"/></td>
                        </tr>
                        <tr>
                            <td>gender:</td>
                            <td>
                                Male:<input type="radio" name="r1" value="M"/><br>
                                female:<input type="radio" name="r1" value="F"/>
                            </td>
                        </tr>
                        <tr>
                            <td>game:</td>
                            <td>
                                TT:<input type="checkbox" name="chk[]" value="TT"/><br>
                                fB:<input type="checkbox" name="chk[]" value="FB"/><br>
                                hockey:<input type="checkbox" name="chk[]" value="HOC"/>
                            </td>
                        </tr>
                        <tr>
                            <td>depts:</td>
                            <td>
                                <select name="dep">
                                    <option value="Accts">Accts</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Mkt">Mkt</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Dsg:</td>
                            <td>
                                <select name="dsg" size="3">
                                    <option value="PM">PM</option>
                                    <option value="TL">TL</option>
                                    <option value="Prog">Prog</option>
                                  </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="Submit" name="btnsubmit" value="submit"/>
                            </td>
                        </tr>
            </table>
        </form>
    </body>
</html>
