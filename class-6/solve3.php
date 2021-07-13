<!--
        problem 3
Write a function to check if an array is a subset of another array
● In mathematics, a set A is a subset of a set B if all elements of A are also elements
of B; B is then a superset of A. It is possible for A and B to be equal;
● For example, you receive two arrays like [1, 2, 3, 4, 5] and [1, 4], this should return
true as 1 & 4 both element is present in the superset array -->

<?php

$square = function(int $number): int {
    return $number * $number;
};

$numbers = [1, 3, 11, 9, 6, 15, 10, 25];

$newNumbers = [];

//for($i = 0, $max = count($numbers); $i < $max; $newNumbers[] = $square($numbers[$i++]));

foreach($numbers as $number) {
    $newNumbers[] = $square($number);
}

print_r($newNumbers);



?>