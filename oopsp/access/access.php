<?php 

class ParentClass
{
   public $public = 1; // 
   protected $protected = 2;
   private $private = 3;

   

   function getProtected()
   {
      echo $this->protected;
      echo $this->public;
   }
}

$publ = new ParentClass();
echo $publ->public;
// echo $publ->protected;// will return no access
$publ->getProtected();

class MyClass  
{
   private $arr = [];
   function __set($n, $v)
   {
      $this->arr[$n] = $v;
   }
   function __get($n)
   {
      $this->arr[$n];
   }
}
$obj = new MyClass();

class MyClassLimited // here we can add only x and y 
{
   private $x, $y;

   function __set($n, $v)
   {
      switch ($n) {
         case 'x':
            $this->x = $v;
            break;
         case 'y':
            $this->y = $v;    
         
         default:
            throw new Exception('!!! Eroor you can\'t do that');
            break;
      }
      $this->arr[$n] = $v;
   }
    function __get($n)
   {
      $this->arr[$n];
   }
}

$obj2 = new MyClassLimited();
echo $obj2->x;











