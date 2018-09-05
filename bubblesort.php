<?php

//A bubble sort is an algorithm that moves through a set, sorting two positions at
//a time.  It will iterate this soriting method untill all positions have been properly sorted.
// the array is [2,1,4,9,0,3,5,8,7,6]

//compare two numbers
//if first number is less than second.  Do nothing.
//If first number is greater than second number, swap them in array.

//Move to next position in the array

//repeat until end of array.

//start sort again.


// if no numbers switch positions then stop.

//print start of array.

//print sorted array.


/*
good example

function bubble_sort($arr) {
    $n = count($arr);
    do {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            // swap when out of order
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $n--;
    }
    while ($swapped);
    return $arr;
}
*/

//zyris solution

$unsortedArray = array(
    2,1,4,9,0,3,5,8,7,6
);

echo json_encode($unsortedArray);


$sorting;

    do{
        // assume false until proven otherwise.  It means it's sorted.
        $sorting = false;
        
        // x is the counter
        for($x = 0; $x < sizeof($unsortedArray)-1; $x++){
            if($unsortedArray[$x] > $unsortedArray[$x + 1]){
                $temp = $unsortedArray[$x];
                $unsortedArray[$x] = $unsortedArray[$x + 1];
                $unsortedArray[$x + 1] = $temp;
                $sorting = true;
                echo json_encode($unsortedArray);
            }
        }

    }while($sorting);

    




    // Got over do/while and for/while loops.  Loops in general.  NEED ALGORITHM LOGIC!!!!!!!!!!!!!!
?>