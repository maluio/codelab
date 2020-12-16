#! /bin/bash

phan() { docker run -v $PWD:/mnt/src --rm -u "$(id -u):$(id -g)" phanphp/phan:latest $@; return $?; }

phan --debug -po analysis.txt