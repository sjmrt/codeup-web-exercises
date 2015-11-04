<?php

for ($number = 1; $number <= 100; $number++)
{
    if ($number % 3 == 0 && $number % 5 ==0) {
        echo "FizzBuzz" . PHP_EOL;
    }
    else if ($number % 3 == 0) {
        echo "Fizz" . PHP_EOL;
    }
    else if ($number % 5 == 0) {
        echo "Buzz" . PHP_EOL;
    }
    else {
        echo $number . PHP_EOL;
    }
}

?>