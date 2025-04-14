<?php

echo "=== Welcome to Number Analyzer ===\n";

while (true) {
    // Prompt the user
    echo "\nEnter a list of numbers separated by spaces (or type 'exit' to quit): ";
    $input = trim(fgets(STDIN));

    // Exit condition
    if (strtolower($input) === 'exit') {
        echo "Exiting... Goodbye!\n";
        break;
    }

    // Convert input into an array
    $numberStrings = explode(' ', $input);
    $numbers = [];

    // Validate and convert input
    $isValid = true;
    foreach ($numberStrings as $numStr) {
        if (is_numeric($numStr)) {
            $numbers[] = floatval($numStr);
        } else {
            $isValid = false;
            break;
        }
    }

    if (!$isValid || empty($numbers)) {
        echo "❌ Invalid input! Please enter only numeric values separated by spaces.\n";
        continue;
    }

    // Perform analysis
    $max = max($numbers);
    $min = min($numbers);
    $sum = array_sum($numbers);
    $average = $sum / count($numbers);

    // Display results
    echo "\n=== Results ===\n";
    echo "Maximum: $max\n";
    echo "Minimum: $min\n";
    echo "Sum: $sum\n";
    echo "Average: " . number_format($average, 2) . "\n";
}