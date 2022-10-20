<?php 

// problem 01

$number = 56;

echo "Your Value is: $number";


// problem 02
$country = "Bangladesh!";

echo '<br>';
echo '<br>';
echo strrev($country);



echo '<br>';
echo '<br>';
// probelm 03


$string = "Hello Bnagladesh!";

echo str_replace("Bnagladesh","CIT",$string);



echo '<br>';
echo '<br>';
//problem 04


define('pi',3.1416);

echo "Constant Value of PI is ".pi;



echo '<br>';
echo '<br>';
//problem 05

$numOne = 54;
$numTwo = 38;

$add = $numOne + $numTwo;
$mul = $numOne * $numTwo;
$div = $numOne / $numTwo;
$sub = $numOne - $numTwo;


echo "Addition of two values: " ."(".$add.")".'<br>';
echo "Multiplication of two values: " ."#".$mul."#".'<br>';
echo "Division of two values: " .$div.'<br>';
echo "Subtraction of two values: "."$" .$sub.'<br>';



echo '<br>';
echo '<br>';
//problem 06


$findReminder = 43;
$a = 5;

$result = $findReminder % $a;

echo "Remainder is $result";



echo '<br>';
echo '<br>';
//problem 07

$gender= 'female';

if($gender == 'male'){
    echo "You are a Male";
}else{
    echo "You are a Female";
}



echo '<br>';
echo '<br>';
//problem 08

$checkNumber = 37;

if($checkNumber % 2 == 0){
    echo  $checkNumber ," is even";
}else{
    echo  $checkNumber ," is odd";
}



echo '<br>';
echo '<br>';
//problem 09


$i = 1;

while($i <= 10){
    echo $i."#";
    $i++;
}



echo '<br>';
echo '<br>';
//problem 10


$vowel = 'a';

switch($vowel){
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':

    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo "Your input is a Vowel";
        break;
    default:
        echo "Your input is a Consonant";
}


echo '<br>';
echo '<br>';
//problem 11


for($i = 1; $i <= 10; $i+=2){
    echo $i."@";
}



echo '<br>';
echo '<br>';
//problem 12


for($i = 1; $i <= 10; $i+=2){
    echo $i."<br>";
}



echo '<br>';
echo '<br>';
//problem 13


$a = 1;


for($x = 1; $x <= 10; $x++){
    $result = $a * $x;
    echo $a. " x " .$x. " = " . $result. "<br>";
}




echo '<br>';
echo '<br>';
//problem 14


function check_number($a){

   if($a < 30  || $a < 20 || $a < 10){
    echo $a." is less than 30"."<br>";   
    echo $a." is greater than 20"."<br>";  
    echo $a." is greater than 10"."<br>";  
   }else{
    echo "wrong";
   }
}

check_number(25);






























?>