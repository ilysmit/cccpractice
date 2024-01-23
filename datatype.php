<?php

//data types
/*
$a=42;
$b=13.20;
$c="hello PHP!!";
$d=true;
$f=null;
$studant=array("nimesh","smit",12);


var_dump($a);
echo "</br>";
var_dump($b);
echo "</br>";
var_dump($c);
echo "</br>";
var_dump($d);
echo "</br>";
var_dump($f);
echo "</br>";
var_dump($studant);

*/

//typecasting

/*
echo "</br>";
$a=(string) $a;
echo var_dump($a);

echo "</br>";
$b=(int) $b;
echo var_dump($b);
*/

//math function

// 1. basic arithmetic

/*
$a=-10;
echo abs($a);

echo "</br>";

$b=25.36;
echo ceil($b);
echo "</br>";

echo floor($b);

$c=10.5;

echo round($c);

$d=10.4;

echo round($d);
*/


// power function

// echo pow(2,3);

// echo sqrt(6);

// echo rand(0,10);

// echo number_format("10000");
// echo "</br>";
// echo number_format("10000",2);
// echo "</br>";
// echo number_format("10000",5);


// 3 PHP OPRETOR;

// arithmetic optetor

// $x =10;
// $x +=1;

// echo $x+$y;
// echo "</br>";
// echo $x-$y;
// echo "</br>";s
// echo $x*$y;
// echo "</br>";
// echo $x/$y;
// echo "</br>";
// echo $x%$y;
// echo "</br>";
// echo $x**$y;

//assingment opretor

// echo $x;
// echo $y;


// $x =10;
// $x -=1;

// $x =10;
// $x +=1;

// $x =10;
// $x *=1;

// $x =10;
// $x /=1;

// $x =10;
// $x %=1;






// echo $x

// $a=100+10;//10% add 
// $b=100;// asume velu 

// $c=(($a-$b)/$a)*100;

// echo $c;


// $a=100;
// $b=90;

// $c=(100-($a/($b/100)));
// echo $c;    


//Comparison Operators:

// $x = 100;  
// $y = "100";

// var_dump($x == $y);

// $x = 100;  
// $y = "100";

// // var_dump($x === $y);

// // $x = 100;  
// // $y = "100";

// // var_dump($x != $y);

// // $x = 100;  
// // $y = "100";

// // var_dump($x !== $y);

// $x = 100;
// $y = 50;

// var_dump($x > $y);

// $x = 10;
// $y = 50;

// var_dump($x < $y); 




// $x = 50;
// $y = 50;

// var_dump($x >= $y);

// $x = 50;
// $y = 50;

// var_dump($x <= $y);

//Increment and Decrement Operators:

// $x = 10;  
// echo ++$x;

// $x = 10;  
// echo $x++;

// $x = 10;  
// echo --$x;

// $x = 10;  
// echo $x--;

// String Operators:

// $txt1 = "Hello";
// $txt2 = " world!";
// echo $txt1 . $txt2;

// $txt1 = "Hello";
// $txt2 = " world!";
// $txt1 .= $txt2;
// echo $txt1;

// . Conditional (Ternary) Operator


// $a = 10;
//   $b = $a > 15 ? 20 : 5;
//   print ("Value of b is " . $b);


// If Statement:



// $t = 14;

// if ($t < 20) {
//   echo "Have a good day!";
// }


// If-Else Statement:

// $t = date("H");

// if ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

// If-Elseif-Else Statement:

//     $t = date("H");

// if ($t < "10") {
//   echo "Have a good morning!";
// } elseif ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }



// Nested If Statements:

// $a = 13;

// if ($a > 10) {
//   echo "Above 10";
//   if ($a > 20) {
//     echo " and also above 20";
//   } else {
//     echo " but not above 20";
//   }
// }

//Loops :

// 1. For Loop:

// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
//   }

// 2. While Loop:

// $i = 1;

// while ($i < 6) {
//   echo $i;
//   $i++;}

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   echo "$x <br>";
// }

// 1. Array Creation and Initialization:

// $name=array("smit","disha","manish",5);
// var_dump($name);


// $a1=array("red","green");
// $a2=array("blue","yellow$fname=array("Peter","Ben","Joe");


// $age=array("35","37","43");

// $c=array_combine($fname,$age);
// print_r($c);");
// // print_r(array_merge($a1,$a2));


// $number = range(0,5);
// print_r($number);


// . Array Modification:

//  $a=array("red","green");
//  array_push($a,"blue","yellow");
//  print_r($a);


// $a=array("red","green","blue");
// array_pop($a);
// print_r($a);


// $a=array("a"=>"red","b"=>"green");
// array_unshift($a,"blue");
// print_r($a);


// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_shift($a);
// print_r ($a);


// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,0,1,$a2);
// print_r($a1);

// Array Access:

// $name=array("smit","disha","Tarun");
// echo count($name);


// $name=array("smit","disha","Tarun");
// echo sizeof($name);

// $a=array("smit"=>"10th","tarun"=>"12th");
// if (array_key_exists("smit",$a))
//   {
//   echo "Key exists!";
//   }
// else
//   {
//   echo "Key does not exist!";
//   }


// $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// print_r(array_keys($a));


// . Array Sorting:

// $numbers = array(4, 6, 2, 22, 11);
// sort($numbers);

// print_r($numbers);

// $numbers = array(4, 6, 2, 22, 11);
// rsort($numbers);

// print_r($numbers);

// $numbers = array(4, 6, 2, 22, 11);
// asort($numbers);

// print_r($numbers);

$numbers = array(4, 6, 2, 22, 11);
ksort($numbers);

// print_r($numbers);


// $numbers = array(4, 6, 2, 22, 11);
// arsort($numbers);

// print_r($numbers);


// $numbers = array(4, 6, 2, 22, 11);
// krsort($numbers);

// print_r($numbers);





// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,3));


// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,0,3,$a2);
// print_r($a1);















?>