<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once("FizzBuzz.php");

final class FizzBuzzTest extends TestCase
{
    public function testOneElement(): void
    {
        $fb = new FizzBuzz();
        $expected = "1";
        $this->assertSame($expected, $fb->run(1));
        
    }

    public function testFirstFizz(): void
    {
        $fb = new FizzBuzz();
        $expected = "1 2 fizz";
        $this->assertSame($expected, $fb->run(3));
    }

    public function testFirstBuzz(): void
    {
        $fb = new FizzBuzz();
        $expected = "1 2 fizz 4 buzz";
        $this->assertSame($expected, $fb->run(5));        
    }

    public function testFirstFizzBuzz(): void
    {
        $fb = new FizzBuzz();
        $expected = "1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz";
        $this->assertSame($expected, $fb->run(15));        
    }
}