<?php

$random = rand();


if ($random < 641462470) {
    echo 'The coin says heads! 
    <img src ="https://qph.fs.quoracdn.net/main-qimg-57e97e36918b359f28e86b8cbf567436.webp">' .
        "Your number is $random";
} elseif ($random >= 64146247 && $random < 900000000) {
    echo 'SPECIAL PRIZE !!!!!!!!!!!!!
    <img src ="https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">'
    . "Your number is $random";
}
else {
    echo 'The coin says tails!
        <img src ="https://www.picclickimg.com/d/l400/pict/333672053344_/Double-headed-coin-Double-tails-Coin-Double-sided.jpg">'
    . "Your number is $random";
}
echo "<br>";

$random_dice = rand(1, 6);
$second_random = rand(1, 10);


$result = round(($random_dice * $second_random), 2);
echo "Your prize money is £$result";



