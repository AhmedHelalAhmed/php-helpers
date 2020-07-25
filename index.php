<?php

require 'helpers.php';

if (isPatternExists("hello", "hello world!")) {
    echo 'exists';
} else {
    echo 'not exists';
}

echo "<br/>";
echo "===============================";
echo "<br/>";

echo filterHTML('<b>test</b>');

echo "<br/>";
echo "===============================";
echo "<br/>";
