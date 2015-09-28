<?php
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   |                 Largest prime factor                     |
   |    The prime factors of 13195 are 5, 7, 13 and 29.       |
   |                                                          |
   |            What is the largest prime factor              |
   |              of the number 600851475143 ?                |
   |                                                          |
   ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 */

$input = 600851475143;
$primeFac = getFac($input);
rsort($primeFac);
echo reset($primeFac);

function getFac($input) {
    $i = 2;
    $primeFac = array();
    for ($i = 2; $i * $i <= $input; $i++) {
        if (fmod($input, $i) == 0) {
            $primeFac[] = $i;
            $input = $input / $i;
        }
    }
    if ($input != 1) {
        $primeFac[] = $input;
    }
    return $primeFac;
}
?>
