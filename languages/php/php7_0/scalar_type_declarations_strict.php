<?php

// https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.scalar-type-declarations
// https://www.php.net/manual/en/language.types.declarations.php


// This file is in strict mode, i.E no implicit type casting
// Except int -> float

declare(strict_types=1);


function onlyString(string $st): string{
    return $st;
}

echo onlyString("hi") . PHP_EOL;
// -> ok

// echo onlyString(1) . PHP_EOL;
// PHP Fatal error:  Uncaught TypeError: Argument 1 passed to onlyString() must be of the type string, integer given

// onlyString([]);
// -> PHP Fatal error:  Uncaught TypeError: Argument 1 passed to onlyString() must be of the type string, array given

function onlyFloat(float $fl): float {
    return $fl;
}

echo onlyFloat(1.4) . PHP_EOL;
// ->ok

echo onlyFloat(26) . PHP_EOL;
// -> ok (coercion from int to float)