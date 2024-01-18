<?php
//echo"smit chavda";

//strlen

// echo strlen("smit chavda");




//str_replace($search, $replace, $subject):

// $x="this is an apple , apple in red color"; 

// echo str_replace("apple","mango",$x);

// $find =["this","apple"];
// $replace=["i","mango"];

// echo str_replace($find,$replace,$x)




// strpos($haystack, $needle):

// $x="hey , i am smit !!! ";
// echo strpos($x,"!");




// substr($string, $start, $length):

// $x="hey smit chavda";
// echo substr($x,8);



// strtolower($string):

// $x="HEY I AM SMIT CHAVDA";
// echo strtolower($x);



// strtoupper($string):

// $x="hey , my name is smit !!";
// echo strtoupper($x)


// $x="hey my name is smit";

// echo $x."<br>";

// echo trim($x,"ht");


// $a=array('this','is','an','example');
// echo implode(" ",$a);



// $str = "Hello world. It's a beautiful day.";
// print_r (explode(" ",$str));

// echo str_repeat("smit",15);

// echo strrev("my name is smit")

// echo str_shuffle("my name is smit");



// $a="smit chavda";

// $array=str_split($a);

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo str_word_count("chavda smit rahulbhai");


// echo substr_replace("chavda smit ","disha",7);


// echo ucfirst("hey i am smit");

// echo ucwords("hey i am smit");

// $a="smit";

// echo str_pad($a,15,".");


// $string1="smit";
// $string2="hkasi";

// echo strcoll($string1,$string2);


$str = "i am smit chavda";
echo htmlentities($str, ENT_COMPAT); 
echo "<br>";
echo htmlentities($str, ENT_QUOTES); 

echo htmlentities($str, ENT_NOQUOTES); 













?>