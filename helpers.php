<?php

// check if pattern exists in statemant
// word in statement
function isPatternExists($pattern, $statement)
{
    return strpos($statement, $pattern)!==false;
}
