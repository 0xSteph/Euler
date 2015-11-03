<?php
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   |                   Smallest Multiple                     |
   | 2520 is the smallest number that can be divided by      |
   | each of the numbers from 1 to 10 without any remainder. |
   |                                                         |
   | What is the smallest positive number that is evenly     |
   | divisible by all of the numbers from 1 to 20?           |
   +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 */

$factors = array();
$primeFac = array(0 => 2);

function getFac($input) {
    global $primeFac;

    for($x = 3; $x < $input; $x += 2) {
        $getFac = 1;
        foreach((array)$primeFac as $prime) {
            if($x % $prime == 0) {
                $getFac = 0;
                break;
            }
        }
        if($getFac) {
            $primeFac[] = $x;
        }
    }
    if($getFac) return TRUE;
    else return FALSE;
}

function smallestMultiple($input) {
        global $primeFac;
        $solution = 1;
        getFac($input);

        foreach((array)$primeFac as $prime) {
            $pow = floor(log($input, $prime));
            $solution = $solution*pow($prime, $pow);
        }

        echo $solution."\n";
}

smallestMultiple(20);
?>
