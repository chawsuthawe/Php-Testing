<?php
function findSingleNumber($arr) {
    $count = array_count_values($arr);
    $singleNumbers = [];
    
    foreach ($arr as $number) {
        if ($count[$number] == 1) {
            $singleNumbers[] = $number;
        }
    }
    
    echo "Array\n(\n";
    foreach ($arr as $number) {
        echo "[0] => $number\n";
    }
    echo ")\n";
    
    echo "Single Number: " . implode(" ", $singleNumbers);
}

$input = array(5, 3, 4, 3, 4);
findSingleNumber($input);
?>
