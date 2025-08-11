<?php
// $age=15;
// if($age<=12){
//  echo "you young to watch this movie";
// }else if($age<15){
//     echo "you can watch this movie";
// }else{
// echo "you can not watch this movie";
// }

//logical operator
// $age=15;
// $watched=false;

// if($age>=15 && !$watched){
//     echo "you mast watch harry potter";
// }
// if($age>=15 || !$watched){
//     echo "you should watch harry potter";
// }

//switch case
$day=3;

switch($day){
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}
