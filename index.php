<?php

function divisor($number)
{
    $divisors = array(); // Initialize empty array
    for ($i = 1; $i <= $number; $i++) {
        if (($number % $i) === 0) {
            $divisors[] = $i;
        }
    }
    echo "Number: " . $number . "<br />";
    echo "Divisors of number: " . implode(', ', $divisors) . "<br />" . "<br />";
}

divisor(4354657);

function getDivisors($num)
{
    $n = $num;
    if ($n != 0) {

        if ($n < 0) {
            $n *= -1;
        }
        $divisors = array();
        $a = array();
        $b = array();

        $i = 0;
        for ($f = 1; $f <= $n; $f += 2) {
            if ($n % $f === 0) {
                $a[] = $f;
            }

        }

        while ($n % 2 === 0) {
            $i++;
            $n /= 2;
        }

        for ($k = 1; $k <= $i; $k++) {
            $b[] = pow(2, $k);
        }

        for ($q = 0; $q < sizeof($a); $q++) {
            $divisors[] = $a[$q];
            for ($s = 0; $s < sizeof($b); $s++) {
                $divisors[] = $a[$q] * $b[$s];
            }
        }
        sort($divisors);
        echo "Number: " . $num . "<br />";
        echo "Divisors of number: " . implode(', ', $divisors) . " + negative numbers";
    } else {
        echo "Input a number that is differed from 0";
    }
}

getDivisors(4354657);