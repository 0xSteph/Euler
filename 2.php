<?php

$sum = 0;
$curr = 2;
$prev = 1;
$goal = 4000000;

while ($curr < $goal) {
    if($curr % 2 == 0) {
        $sum += $curr;
    }

    $tmp = $prev;
    $prev = $curr;
    $curr += $tmp;
}

echo "$sum\n";

?>
