<!-- Write a program to return the chunks of an array like paginating
● The function will take 2 strict arguments $offset and $itemsPerPage
● $offset is the starting point of the array element
● $itemsPerPage is the no of elements to be returned
● Function should return an array -->

<?php
$array = range(1, 100);

function paginate(int $offset, int $perPage): array 
{
    global $array;
    
    return array_slice($array, $offset, $perPage);
}

$page = 3;
$noOfItems = 10;
$offset = $noOfItems * ($page - 1);
print_r(paginate($offset, $noOfItems));