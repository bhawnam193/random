<?php
class clsname
{
    protected $fname,$lname;
    function __construct($f,$l)
    {
        $this->fname=$f;
        $this->lname=$l;
    }
    function disp()
    {
        echo 'first name :'.$this->fname.'<br>';
        echo 'last name :'.$this->lname.'<br>';
    }
}
class clsfullname extends clsname
{
  private $mname;
  function __construct($f,$m,$l)
  {
      $this->fname=$f;
      $this->lname=$l;
      $this->mname=$m;
  }
  function disp()
  {
      echo 'first name :'.$this->fname.'<br>';
      echo 'M name :'.$this->mname.'<br>';
      echo 'last name :'.$this->lname.'<br>';
  }
}

?>
