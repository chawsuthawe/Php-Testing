<?php
function isPowerOfTwo($num) {
    // If $num is less than 1, it cannot be a power of two
    if ($num < 1) {
        return false;
    }

    // Keep dividing $num by 2 until it's not divisible anymore
    while ($num % 2 == 0) {
        $num /= 2;
    }

    // If $num is 1 after all divisions, it's a power of two
    return $num == 1;
}

// Test the function
$input = 4;
if (isPowerOfTwo($input)) {
    echo "$input is a power of 2";
} else {
    echo "$input is not a power of 2";
}
?>
