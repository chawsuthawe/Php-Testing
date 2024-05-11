<?php
function findTriplets($arr, $target) {
    $n = count($arr);
    $found = false;
    
    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
            for ($k = $j + 1; $k < $n; $k++) {
                if ($arr[$i] + $arr[$j] + $arr[$k] == $target) {
                    echo "Array\n(\n";
                    echo "[0] => {$arr[$i]} + {$arr[$j]} + {$arr[$k]} = $target\n";
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

$arr = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
$target = 16;
findTriplets($arr, $target);
?>
