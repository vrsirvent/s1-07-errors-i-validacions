<?php

$numerator = 45;
$denominator = 0;

function divide(int $numerator, int $denominator): float {
    if ($denominator === 0) {
        throw new DivisionByZeroError("\nError: Cannot divide by zero.");
    }
    return $numerator / $denominator;
}

try {
    echo "\n" . "The result of the division is: " . divide($numerator, $denominator);
} catch (DivisionByZeroError $exception) {
    echo $exception->getMessage();
}

?>


