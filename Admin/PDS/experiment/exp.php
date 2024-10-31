<?php

// Define an empty array
$numbers = [];

// Initialize a counter
$i = 0;

// Use a while loop to store elements into the array
while ($i <= 10) {
    $numbers[] = $i * 10; // Store multiples of 10 into the array
    $i++; // Increment the counter
    // echo $i . "|";
}

// // Show the index of 2 and 3
// echo "Index of 2: " . $numbers[1] . "\n"; // Index 1 corresponds to the second element
// echo "Index of 3: " . $numbers[2] . "\n"; // Index 2 corresponds to the third element



$start = 1;
$end = 9;
$chunkSize = 3;

for ($i = $start; $i <= $end; $i += $chunkSize) {
    for ($j = $i; $j < $i + $chunkSize && $j <= $end; $j++) {
        echo  $numbers[$j];
        // echo $j;
    }
    echo " ";
}


?>









<?php

// $start = 1;
// $end = 9;
// $chunkSize = 3;

// for ($i = $start; $i <= $end; $i += $chunkSize) {
//     for ($j = $i; $j < $i + $chunkSize && $j <= $end; $j++) {
//         echo $j;
//     }
//     echo " ";
// }


?>