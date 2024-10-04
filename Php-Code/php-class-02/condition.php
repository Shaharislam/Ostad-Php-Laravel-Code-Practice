<?php 

$mark = 50 ;

//If Else Condition

if($mark <= 100 && $mark >= 80) 
{
    echo "From If-Else  A+\n";
}
else if($mark >= 70 && $mark < 80){
    echo "From If-Else A \n";
}
else if($mark >= 60 && $mark < 70)
{
    echo "From If-Else A- \n";
}
else if($mark >= 50 && $mark < 60){
    echo "From If-Else B\n";
}
else if($mark >= 40 && $mark < 50){
    echo "From If-Else C\n";
}
else if($mark >= 33 && $mark < 40){
   echo "From If-Else D\n";
}
else{
    echo "From If-Else Fail\n";
}

//Switch Case 


$mark = 50;

switch (true) {
    case ($mark <= 100 && $mark >= 80):
        echo "From Switch Case A+";
        break;
    case ($mark >= 70 && $mark < 80):
        echo "From Switch Case A";
        break;
    case ($mark >= 60 && $mark < 70):
        echo "From Switch Case A-";
        break;
    case ($mark >= 50 && $mark < 60):
        echo "From Switch Case B";
        break;
    case ($mark >= 40 && $mark < 50):
        echo "From Switch Case C";
        break;
    case ($mark >= 33 && $mark < 40):
        echo "From Switch Case D";
        break;
    default:
        echo "From Switch Case Fail";
        break;
}

