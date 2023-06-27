<?php
function countWays($coins, $sum) {
    $memo = array();
    
    for ($i = 0; $i <= $sum; $i++) {
        $memo[$i] = 0;
    }
    
    $memo[0] = 1;
    foreach ($coins as $coin) {
        for ($i = $coin; $i <= $sum; $i++) {
            $memo[$i] += $memo[$i - $coin];
        }
    }
    
    return $memo;
}

$coins = [1, 5, 10, 25, 50, 100, 200];
$result = countWays($coins, 350);
echo "Number of ways: " . $result[350] . " ways";
// the answer should be 23642 ways for G3.5
?>
