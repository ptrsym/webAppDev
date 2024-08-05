<?php
/* 
 * factors($n) returns an array of prime factors of valid integer $n. 
 * Precondition: 2 <= n <= MAHP_MAX_INT = 2^31-1.
 * Note that it is executed for its _value_ not for its _effect_.
 */

define ("FILE", "stored_results.txt");


function factors($n) {
    $factors = array(); # initialise $factors to be an empty array
    $cand = 2;
    while ($n > 1 && $cand*$cand <= $n) {
        while ($n > 1 && $n % $cand == 0) {
            $factors[] = $cand; # append $cand to the array $factors
            $n = $n / $cand;
        }
        $cand++;
    }
    if ($n > 1) {
        $factors[] = $n; # append $n to the array $factors
    }
    return $factors;
}

function appendResult($factors) {
    $fp = fopen(FILE, "a");
    fwrite($fp, $factors . "\n");
    fclose($fp);
}

function showResults() {
    $results = [];
    $fp = fopen(FILE, "r");
    while(!feof($fp)) {
        $factors = fgets($fp, 4096);
        if ($factors !== FALSE && trim($factors !== '')) {
            $results[] = $factors;
        }
    }
    fclose($fp);
    return $results;
}




?>
