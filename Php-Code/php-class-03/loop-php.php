<?php

$countLimit =75;

for($i=0;$i<=$countLimit;$i++){
   echo"*";
}
echo"\n\n";
echo"This is the star loop test\n\n";
for($i=0;$i<=$countLimit;$i++){
    echo"*";
    if($i%10==0){
      echo"\n";
    }
 }
 echo"\n";
 echo"Above for loop End\n";

 function printStar(){
    $startCount = 100;
    for($i=0;$i<=$startCount;$i++){
        echo"*";
     }
 }

 printStar();
 echo "\nThis is From printStart Function\n";
 printStar();

 function printStar2($startCount2){
    
    for($i=0;$i<=$startCount2;$i++){
        echo"*";
     }
     echo"\n";
 }
 echo "\nThis is From printStart2 Function\n";
 printStar2(100);
 echo "\nThis is From printStart2 Function\n";
 printStar2(50);
 printStar2(40);
 printStar2(30);
 printStar2(20);
 printStar2(10);
 printStar2(20);
 printStar2(30);
 printStar2(40);
 printStar2(50);
 printStar2(50);
 printStar2(45);
 printStar2(40);
 printStar2(35);
 printStar2(30);
 printStar2(25);
 printStar2(20);
 printStar2(15);
 printStar2(10);