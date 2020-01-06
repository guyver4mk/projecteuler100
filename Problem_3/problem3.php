<?php

$base = 600851475143;

$factors = primeFactors($base);

var_dump($factors);


//Check if a number is prime
function isPrime($num, $pf = null)
{
    if(!is_array($pf))
    {
        for($i=2;$i<intval(sqrt($num));$i++)
        {
            if($num % $i==0)
            {
                return false;
            }
        }

        return true;
    }
    else
    {
        $pfCount = count($pf);
        for($i=0;$i<$pfCount;$i++)
        {
            if($num % $pf[$i] == 0)
            {
                return false;
            }
        }
        return true;
    }
}

//Find Prime Factors
function primeFactors($number)
{
    //Record the base
    $base = intval($number/2);
    $pf = array();
    $pn = null;
    for($i=2;$i <= $base;$i++) {
        if(isPrime($i, $pn)) {
            $pn[] = $i;
            while($number % $i == 0)
            {
                $pf[] = $i;
                $number = $number/$i;
            }
        }
    }
    return $pf;
}