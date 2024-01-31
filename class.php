 <?php

//  class abc{

//     public $a=10;
//     private $b=20;
//     protected $c="hello";
//     function __construct()
//     {
//     }
    
//  }

//  class xyz extends abc{

//      public $a=50;

//  }
//  class pqr extends xyz{

//  }

//  $obj=new abc();
// print_r($obj->a);
// $obj1= new xyz();
// print_r($obj1->a);
// $obj2= new abc();
// print_r($obj2->a);



// 
 class A 
 {
    public $i=0;
    public function inc()
    {
        $this->i++;
    }
 }

$obj= new A;
print_r($obj);
$obj->inc();
print_r($obj);
?>