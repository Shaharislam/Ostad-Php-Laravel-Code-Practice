<?php

function greet($name, $time = "Moorning") {
    echo "Good $time $name \n";
}

greet("Jon","Mooring");
greet("Juveria","Night");
greet("Jara","Afternoon");
greet("Mukta");

function add($numberOne , $numberTwo){
    $result = $numberOne + $numberTwo;
    return $result;
}

$sumattion = add(20,25);
echo "\n\nThe sum of 20 and 25 is $sumattion\n\n";qqqqqqqqqq