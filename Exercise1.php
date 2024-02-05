<?php
class calculator{
    function add($a,$b){
        return "sum of a and b is ".$a+$b;
    }
    function sub($a,$b){
        return "sub of a and b is ".$a-$b;
    }
    function mul($a,$b){
        return "mul of a and b is ".$a*$b;
        }
    function div($a,$b){
        if ($b!=0){
            return "div of a and b is ".$a/$b;
        }
        else{
            return "can not divided ny zero";
        }
    }
}

$calculator=new calculator();
echo $calculator->add(1,3);
echo $calculator->sub(5,6);
echo "<br>";
echo $calculator->div(10,5);
echo "<br>";
echo $calculator->mul(8,6);
echo "<br>";




?>