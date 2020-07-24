<?php

require 'helpers.php';


if (isPatternExists("hello", "hello world!")) {
    echo 'exists';
} else {
    echo 'not exists';
}
