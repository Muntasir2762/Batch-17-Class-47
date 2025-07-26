<?php

// $mark = 70;

// if($mark>=80){ //80, 81, 82.....
//     echo "The grade is A+";
// }
// elseif($mark>=70){ // 70, 71, 72, 73......79
//     echo "The grade is A";
// }
// elseif($mark>=60){
//     echo "The grade is A-";
// }
// elseif($mark>=50){
//     echo "The grade is B";
// }
// elseif($mark>=40){
//     echo "The grade is C";
// }
// elseif($mark>=33){
//     echo "The grade is D";
// }
// else{
//     echo "The gtrade is F";
// }


// switch($mark){ //92
//     case 80;
//     echo "The grade is A+";
//     break;

//     case 70;
//     echo "The grade is A";
//     break;

//     case 60;
//     echo "The grade is A-";
//     break;

//     case 50;
//     echo "The grade is B";
//     break;

//     case 40;
//     echo "The grade is C";
//     break;

//     case 33;
//     echo "The grade is D";
//     break;

//     default:
//     echo "The grade is F";
//     break;
// }


function sum($x, $y){
    $number1 = $x;
    $number2 = $y;

    $result = $number1+$number2;

    // echo $result;

    return $result;
}

$sumResult = sum(50, 60);
echo "The sum is=".$sumResult."<br>";

$sumResult2 = sum(100, 80);
echo "The sum is=".$sumResult2;


?>