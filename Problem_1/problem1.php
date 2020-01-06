<?php

$i = 0;
$multiples = [];

while(++$i <= 1000)
{
    $multiples[] = (3 * $i);
    $multiples[] = (5 * $i);
}

echo "Sum of Multiples: " . array_sum($multiples)."\n";