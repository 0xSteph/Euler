<?php
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++
   |            Sum square difference                 |
   | The sum of the squares of the first ten natural  |
   | numbers is 385.                                  |
   | The square of the sum of the first ten natural   |
   | numbers is 3025.                                 |
   |                                                  |
   | Hence the difference between the sum of the      |
   | squares of the first ten natural numbers and     |
   | the square of the sum is 3025 − 385 = 2640.      |
   |                                                  |
   | Find the difference between the sum of the       |
   | squares of the first one hundred natural         |
   | numbers and the square of the sum.               |
   ++++++++++++++++++++++++++++++++++++++++++++++++++++
 */

function sumSquareDiff($input) {
    $sumOfSquares = "";
    $sum = "";

    for($n = 1; $n <= $input; $n++) {
        $square = pow($n, 2);
        $sumOfSquares += $square;
        $sum += $n;
    }

    $squareOfSums = pow($sum, 2);
    $difference = $squareOfSums - $sumOfSquares;

    echo $difference."\n";
}

sumSquareDiff(100);
?>
