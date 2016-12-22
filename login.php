<?php 
$host="localhost";
$uname="root";
$pwd="";
$link=mysql_connect($host,$uname,$pwd);

mysql_select_db("dbemployee1030",$link);
if(isset($_POST["btnlogin"]))

{
 
    $u=$_POST["txtuname"];
    $p=$_POST["txtupass"];
  
  $qry="call logincheck('$u','$p',@ret)";
    $res=mysql_query($qry);
  
  $res1=mysql_query("select @ret");
    if($r= mysql_fetch_row($res1))
    
{
      
  $a=$r[0];
   
     if($a==-1)
     
   {
         
   echo'wrong user';
  
          }
       
     if($a==-2)
      
      {
         
       echo'wrong password';
    
        }
            if($a==1)
          
  {
                echo'login';
       
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
       
 <form name="f1" action="login.php" method="POST">
    
        <table border="5">
             
   <tr>
                    <td>username :</td>
       
             <td><input type="text" name="txtuname"/></td>
    
            </tr>   
                <tr>
            
        <td>password :</td>
                   
 <td><input type="password" name="txtupass"/></td>
      
          </tr>
                <tr>
                  
  <td colspan="2">
                      
  <input type="submit" value="login" name="btnlogin"/>
      
              </td>
                </tr>
        
   
 </table>    
        </form>
        </body>
        </html>

