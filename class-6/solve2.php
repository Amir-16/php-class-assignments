<!-- Prime number is a number which is only divisible by 1 and itself.
● For example, 7 is a prime number because 7 is only fully divisible by 1 and 7 itself,
but no other number. 15 is NOT a prime number because 15 is divisible by 3 and 5.
● Suppose you have an array like [1, 6, 7, 11, 123, 100, 51, 29]. You have to write a
program to check every number in the list and print if it is a prime number or not -->

<?php

$primeCheck =function (int $number):bool{
    if($number<= 1){
        return false;
    }
    for($i =2, $max =sqrt($number); $i<=$max ;$i++){
        if($number % $i ==0){
            return false;
        }

    }
    return true;
    
};


$numbers = [1, 6, 7, 11, 123, 100, 51, 29, -11];

foreach ($numbers as  $number) {
        echo $number .'is ';
        echo $primeCheck($number)?'is prime':'is not prime';
        echo $PHP_EOL;
}




?>