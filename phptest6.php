<?php
function findTriplets($arr) {
    $n = count($arr);
    $found = false;
    
    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
            for ($k = $j + 1; $k < $n; $k++) {
                if ($arr[$i] + $arr[$j] + $arr[$k] == 0) {
                    echo "Array\n(\n";
                    echo "[0] => {$arr[$i]} + {$arr[$j]} + {$arr[$k]} = 0\n";
                    echo ")\n";
                    $found = true;
                }
            }
        }
    }
    
    if (!$found) {
        echo "No such triplet found\n";
    }
}

$arr = array(-1, 0, 1, 2, -1, -4);
findTriplets($arr);
?>
