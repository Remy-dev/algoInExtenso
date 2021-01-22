<?php

function increment($number): ?array {
    $number = (int) $number;
    if( null === $number ) {
        exit('une coquille détectée');
    } else {
        $array = str_split($number, 1);

        for($i = 0; $i < count($array); $i++) {
            $array[$i]++;
        }
        return $array;
    }
}


print_r(increment(0));
