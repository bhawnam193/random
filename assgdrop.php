<script>
    function GetData(dno)
    {
        {
            window location="assgdrop.php?edno="+dno;
        }
        while($r=mysql_fetch_array($res))
            {
                if(isset($_REQUEST["edno"])&&$_REQUEST["edno"]==$r[0])
                    {
                        echo"<option value=$r[0] selected>$r[1]</option>";
                    }
                    else
                        {
                            echo"<option value=$r[0]>$r[1]</option>";
                        }
            }
            echo'</select><br>';
    }
<?php
include_once'conn.php';
function add_dep()
{
    $qry="select * from tbdep";
    $res=mysql_query($qry);
    echo'select depts : <select name="d1">';
    echo'<option value="-1">select depts</option>';
    while($r=mysq_fetch_array($res))
    {
        echo"<option value=$r[0]>$r[1]</option>";
    }
    echo'</select>';
}
function GetEmp($dno)
{
    $qry="select * from tbemployee where edno='$dno'";
    $res= mysql_query($qry);
    echo'<table border="5">';
    echo'<tr><th>empno</th><th>name</th><th>address</th><th>salary</th></tr>';
    while($r=mysql_fetch_array($res))
    {
        echo'<tr>';
        echo"<td>$r[0]</td><td>$r[1]</td><td>$r[2]</td>$r[3]</td>";
        echo'</tr>';
    }
    echo'</table>';
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
	echo"hello";
        <?php
        add_dep();
        GetEmp(10);
        ?>
    </body>
</html>
