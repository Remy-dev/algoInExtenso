<?php

/**
 * @param int $end
 */
function fizzBuzz($end) {
    $end = (int) $end;
    if(null !== $end){
        for($i=1; $i<$end; $i++){
            $dividedBy3 = $i / 3;
            $dividedBy5 = $i / 5;
            switch($i) {
                case is_float($dividedBy3):
                    if (!is_float($dividedBy5)) {
                        echo 'Buzz' . PHP_EOL;
                    } else {
                        echo $i . PHP_EOL;
                    }
                    break;
                case is_float($dividedBy5):
                    if (!is_float($dividedBy3)) {
                        echo 'Fizz' . PHP_EOL;
                    } else {
                        echo $i . PHP_EOL;
                    }
                    break;
                case !is_float($dividedBy3) && !is_float($dividedBy5):
                    echo 'FizzBuzz' . PHP_EOL;
                    break;
                default:
                    echo $i . PHP_EOL;
                    break;
            }

        }
    } else {
        return 1;
    }

}

fizzBuzz(2000);
