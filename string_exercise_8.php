<?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(11);
if ($a==0)
echo 'This is not a Prime Number.....'."</br>";
else
echo 'This is a Prime Number..'."</br>";

?>