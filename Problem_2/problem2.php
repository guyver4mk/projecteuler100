<?php
$i=0;
$sequence = [2];
$first=1;
$second=2;
while(true)
{
    $next = $first + $second;
    if(checkEvenNumber($next)===1)
    {
        $sequence[] = $next;
    }

    if($next > 4000000)
        break;

    $first = $second;
    $second = $next;

//    echo $next . "\n";
}

echo "Sum of Even Fibonacci Values: " . array_sum($sequence) . "\n";


function checkEvenNumber($number)
{
    if($number % 2 === 0)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}