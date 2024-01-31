<?php

// $a=18;

// if($a>18)
// {
//     echo "you can vote";
// }
// elseif($a>=18)
// {
//     echo "you just 18 year old but you doing voting";
// }
// else
// {
//     echo "you not doing vote ";
// }

// $a=67;

// if($a>25 && $a<65)
// {
//     echo "drive";
// }

// else
// {
//     echo "don't drive";
// }

// $age=12;

//     switch($age)
//     {
//         case 12:
//             echo "your age is $age";
//             break;
        
//         case 15:
//             echo "your age is $age";
//             break;
        
//         case 18:
//             echo "your age is $age";
//             break;
        
//         case 20:
//             echo "your age is $age";
//             break;
        
//         default:
//             echo "your age is not match";
                    
//     }

$today=date("D");

    switch($today)
    {
        case "Mon":
            echo "today is monday ! you go to  office work";
            break;
        case "Tue":
            echo "today is tuesday ! you work from home";
            break;
        case "Wed":
            echo "today is wednesday ! you go to office work";
            break;
        case "Thu":
            echo "today is thursday ! you work from home";
            break;
        case "Fri":
            echo "today is friday ! you go to office work";
            break;
        case "Sat":
            echo "today is saturday ! you can chill out today is weekand time";
            break;
        case "Sun":
            echo "today is sunday ! enjoy you day today is weekand day";
            break;
        default:
            echo "you give me wrong day";

    }
?>