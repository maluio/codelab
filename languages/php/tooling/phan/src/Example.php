<?php

class Example {

    public function noTypeHint($a){
        $cond = false;
        $always_true = is_bool($cond);
        return $a;
    }
}

$e = new Example();
$e->noTypeHint(1);

function demo($param, $arg) : ?int {
    // Phan can infer types, detect missing elements,
    // and detect incorrect calls.
    global $argc;
    var_export(new my_class());

    $cond = $param > 5;
    if (!($arg instanceof SplObjectStorage)) { return $argc; }
    $arg->attach($cond);
    $arg->atach(new stdClass());
    $arg->attach(
        new MyClass($argc),
        [],
        'extra'
    );
    // Phan can detect redundant/impossible conditions
    // and unused variables.
    $always_true = is_bool($cond);
    echo "Missing variable is $argv\n";
    return $arg;
}

class MyClass {
    public function __construct(string $x = null) {
        // and detect undeclared properties, etc.
        $this->x = $x;
    }
}
demo(2, new SplObjectStorage());