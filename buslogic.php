<?php
include_once'connection.php';
class clsemp
{
    public $empno,$ename,$eadd,$esal;
    public function save_rec()
    {
        $con=newclscon();
        $qry="call insemp('$this->empno','$this->ename','$this->eadd','$this->esal')";
        $res=mysql_query($qry);
        $d=mysql_affected_rows();
        mysql_close();
        if($d==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
public function update_rec()
{
    $con=new clscon();
    $qry="call updemp('$this->empno','$this->ename','$this->eadd','$this->esal')";
    $res=mysql_query(qry);
    $d=mysql_affected_rows();
    mysql_close();
    if($d==1)
    {
        return true;
    }
 else 
     {
     return false;   
    }
}
}      
?>

