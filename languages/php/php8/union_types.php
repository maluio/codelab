<?php
/**
Instead of PHPDoc annotations for a combination of types, 
you can use native union type declarations that are validated at runtime.

docs https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.union
*/


/** PHP 7 */

class Number7 {
    /** @var int|float */
    private $number;
  
    /**
     * @param float|int $number
     */
    public function __construct($number) {
      $this->number = $number;
    }
  }
  
new Number7('NaN'); // doesn't throw an exception


/** PHP 8 */

class Number8 {
  public function __construct(
    private int|float $number
  ) {}
}

try {
    new Number8('NaN'); // provoke TypeError
}catch (TypeError $e){
    echo "I am a type error, as expected" . PHP_EOL;
}
