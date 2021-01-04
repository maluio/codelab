<?php

// https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.scalar-type-declarations
// https://www.php.net/manual/en/language.types.declarations.php

// This file is in coercive mode, i.E some types will be implicitly casted to other types


function onlyString(string $st): string{
    return $st;
}

echo onlyString("hi") . PHP_EOL;
// -> ok

echo onlyString(1) . PHP_EOL;
// -> ok (coercion from int to string)

// onlyString([]);
// -> PHP Fatal error:  Uncaught TypeError: Argument 1 passed to onlyString() must be of the type string, array given

function onlyFloat(float $fl): float {
    return $fl;
}

echo onlyFloat(1.4) . PHP_EOL;
// ->ok

echo onlyFloat(26) . PHP_EOL;
// -> ok (coercion from int to float)