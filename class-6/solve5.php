<!-- 5. Write a short program that prints each number from 1 to 50 on a new line.
● For each multiple of 3, print "Fizz" instead of the number.
● For each multiple of 5, print "Buzz" instead of the number.
● For numbers which are multiples of both 3 and 5, print "FizzBuzz" instead of the
number. -->

<?php

$fizzBuzz = function (int $number): string|int {
    if ($number % 3 == 0 && $number % 5 == 0) {
        return "FizzBuzz";
    }
    
    if ($number % 3 == 0) {
        return "Fizz";
    }
    
    if ($number % 5 == 0) {
        return "Buzz";
    }
    
    return $number;
};

for ($i = 1; $i <= 50; print $fizzBuzz($i++) . PHP_EOL);
