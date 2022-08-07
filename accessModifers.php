<?php
/* 
Types Of Class

Abstract class.
Concrete class.
Sealed class.
Static class.
Instance class.
Partial class.
Inner/Nested class.


destrcture and constrctor 
__destrcture
*/



class ParentClass
{
  // A public property
  public $public = "UMESKIA";

  // A private property
  private $private = "SOFTWARES";

  // A protected property
  protected $protected = "COMPANY";

  // Access the public property within the class
  public function echo_public()
  {

    $a = $this->public;
    $b = $this->echo_private();
    $c = $this->echo_protected();
    return  $a . ' ' . $b . ' ' . $c;
  }

  // Access the private property within the class
  private function echo_private()
  {
    return $this->private;
  }

  // Access the protected property within the class
  protected function echo_protected()
  {
    return $this->protected;
  }
}

class childClass extends ParentClass
{
  public function _name()
  {
    $a = $this->public;
    $b = $this->echo_protected();
    return  $a . ' ' . $b;
  }
}

$data = new ParentClass;
$data->echo_public();

$newData = new childClass;

echo $newData->_name();