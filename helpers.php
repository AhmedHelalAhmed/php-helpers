<?php

// check if pattern exists in statemant
// word in statement
if (!function_exists('isPatternExists')) {
    function isPatternExists($pattern, $statement)
    {
        return strpos($statement, $pattern)!==false;
    }
}

if (!function_exists('filterHTML')) {
    function filterHTML($html)
    {
        return htmlentities($html);
    }
}
