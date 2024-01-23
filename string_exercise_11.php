<?php

$array=[64, 34, 25, 12, 22, 11, 90];
$length=count($array);

    for($i=0 ; $i<$length; $i++)
{
        for($j=0 ; $j<($length-1-$i); $j++)
        {
            if($array[$j]>$array[$j+1])
            {
                $temp=$array[$j];
                $array[$j]=$array[$j+1];
                $array[$j+1]=$temp;
            }
        }
    }
echo "";
print_r($array);
?>