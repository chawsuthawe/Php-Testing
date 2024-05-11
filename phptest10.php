<?php
function findSingleElement($arr) {
    $ones = 0;
    $twos = 0;
    
    foreach ($arr as $num) {
        $ones = ($ones ^ $num) & ~$twos;
        $twos = ($twos ^ $num) & ~$ones;
    }
    
    return $ones;
}

$input = array(5, 3, 4, 3, 5, 5, 3);
$output = findSingleElement($input);

echo "Array\n(\n";
foreach ($input as $number) {
    echo "[0] => $number\n";
}
echo ")\n";

echo "Single Number: $output";
?>
