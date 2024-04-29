<?php
use app\teste\Teste;
// Define your autoloader function
function my_autoloader($class_name) {
    // Convert class name to a file path
    $file_path = __DIR__ . '\classes\\' . $class_name . '.php';
    // echo $file_path;
    // Check if the file exists
    if (file_exists($file_path)) {
        // Require the file
        require_once $file_path;
    }
}

// Register the autoloader function
spl_autoload_register(function($a){echo $a;});

// Now you can use your classes without including them manually
// For example:
$obj = new Teste(); // MyClass will be autoloaded if it hasn't been included yet
$obj -> teste();
