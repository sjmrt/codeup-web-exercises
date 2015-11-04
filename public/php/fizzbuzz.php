<?php

fwrite(STDOUT, 'Please pick a starting number ');
$start = fgets(STDIN);

fwrite(STDOUT, 'Please pick an ending number ');
$end = fgets(STDIN);

fwrite(STDOUT, 'Please pick an incrementer ');
$increment = fgets(STDIN);


for ($number = $start ; $number <= $end; $number = $number + $increment)
{
    if ($number % 3 == 0 && $number % 5 == 0) {
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