<?php

require 'helpers.php';

printSeparator();
echo '========(Is Pattern Exists)==========';
printSeparator();

if (isPatternExists("hello", "hello world!")) {
    echo 'exists';
} else {
    echo 'not exists';
}

printSeparator();
echo '=========(Filter HTML)===========';
printSeparator();

echo filterHTML('<b>test</b>');

printSeparator();
echo '========(advanced Debug)==========';
printSeparator();

advancedDebug([
    'name'=>'Ahmed Helal',
    'age'=>26
]);

printSeparator();
