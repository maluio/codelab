<?php

// https://www.php.net/releases/8.0/en.php#named-arguments
// https://wiki.php.net/rfc/named_params

/**
 * Named arguments allow passing arguments to a function based on the parameter name, rather than the parameter position. 
 * This makes the meaning of the argument self-documenting, makes the arguments order-independent, 
 * and allows skipping default values arbitrarily. 
 */

 function withNamedArgs($firstArg, $secondArg, $thirdArg){
     echo $firstArg . PHP_EOL;
     echo $secondArg . PHP_EOL;
     echo $thirdArg . PHP_EOL;
 }

 echo  "Traditional way: Passing arguments in order:" . PHP_EOL;
 withNamedArgs(1, 2, 3);

 echo  "New way: Passing arguments by named parameters:" . PHP_EOL;
 withNamedArgs(thirdArg: 1, firstArg: 2, secondArg: 3);

 echo  "What happens when I mix both ways, part 1?" . PHP_EOL;
// withNamedArgs(1, firstArg: 2, 3);
echo "-> Fatal error: Cannot use positional argument after named argument". PHP_EOL;

echo "What happens when I mix both ways, part 2?" . PHP_EOL;
//withNamedArgs(1, firstArg: 2, secondArg: 3);
echo "-> Fatal error: Uncaught Error: Named parameter \$firstArg overwrites previous argument in /code/named_arguments.php:30" . PHP_EOL;
