<?php
class clsemp
{
    public $eno,$en,$ed,$es;
    function __construct(){
        $this->eno=101;
        $this->en="amit";
        $this->ed="#gfdjd";
        $this->es=12000;
  }
  function disp()
  {
      echo 'Empno :'.$this->eno.'<br>';
      echo 'name :'.$this->en.'<br>';
      echo 'address :'.$this->ed.'<br>';
      echo 'salary :'.$this->es.'<br>';
  }
}
?>
