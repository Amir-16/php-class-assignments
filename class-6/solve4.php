<!-- 4. Write a program to generate all odd numbers from 1 to 150. -->

<?php



$isOdd = function (int $number): bool {
    return ! ($number % 2 == 0);
};

// Generator
$odds = function (int $max) use ($isOdd) {
    for($i = 1; $i < $max; $i++) {
        if ($isOdd($i)) {
            yield $i;
        }
    }
};

// $oddNumbers = $odds(10);
// var_dump($oddNumbers->current());
// $oddNumbers->next();
// var_dump($oddNumbers->current());
// $oddNumbers->next();
// var_dump($oddNumbers->current());
// $oddNumbers->next();
// var_dump($oddNumbers->current());

foreach($odds(10) as $item) {
    echo "$item\n";
}





