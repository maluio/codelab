<?php declare(strict_types=1);

final class FizzBuzz
{
    public function run(int $numberOfElements): string
    {
        $output = [];
        for ($i=1; $i <= $numberOfElements; $i++){
            if($i % 3 === 0 && $i % 5 === 0){
                $output[] = "fizzbuzz";
            }elseif($i % 3 === 0){
                $output[] = "fizz";
            }elseif($i % 5 === 0){
                $output[] = "buzz";
            }
            else{
                $output[] = $i;
            }
        }
        return implode(" ", $output);
    }
}