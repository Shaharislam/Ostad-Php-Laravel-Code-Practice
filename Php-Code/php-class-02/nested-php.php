<?php

$age = 20;
$gender = "male";

if ($age >= 18) {
    if ($gender == "male") {
        echo "You are an adult male.";
    } else if ($gender == "female") {
        echo "You are an adult female.";
    } else {
        echo "You are an adult of unspecified gender.";
    }
} else {
    if ($gender == "male") {
        echo "You are a minor male.";
    } else if ($gender == "female") {
        echo "You are a minor female.";
    } else {
        echo "You are a minor of unspecified gender.";
    }
}

$isVote = ($age >= 18)?"Yes":"No";
echo"\nYou are eligible for Vote ???  $isVote ";


