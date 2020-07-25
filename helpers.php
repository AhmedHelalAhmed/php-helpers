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



if (!function_exists('advancedDebug')) {
    function advancedDebug($expression)
    {
        echo '<pre>';
        print_r($expression);
        echo '</pre>';

        echo "<br/>=============details=============<br/>";

        echo '<pre>';
        var_dump($expression);
        echo '</pre>';
    }
}

if (!function_exists('printSeparator')) {
    function printSeparator()
    {
        echo "<br/>===============================<br/>";
    }
}
