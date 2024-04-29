<?php
try {
    // Your code that might throw an exception
    $result = 'a' / 0; // This will throw a DivisionByZeroError
    echo "This line won't be executed because of the error.";
} catch (\Throwable $e) {
    // Handle the exception gracefully
    var_dump( "An error occurred: " , $e);
}

echo '@@@@@@@@@@@@@@@@@@@@@@@';