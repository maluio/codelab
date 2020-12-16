CMD:=docker run -v `pwd`:/code --entrypoint /bin/sh  php:8-cli -c

union_types:
	$(CMD) 'php /code/union_types.php'

named_arguments:
	$(CMD) 'php /code/named_arguments.php'