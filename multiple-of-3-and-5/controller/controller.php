<?php
function getSum($number){
    $maxNumber = $number;
    $sum = 0;
    for ($i=1; $i < $maxNumber; $i++) { 
        if($i%3 === 0 || $i%5 === 0){
            $sum = $sum + $i;
        }
    }

    $output = json_encode(array(
        "max_number" => $maxNumber,
        "sum" => $sum
    ));

    echo $output;
}
?>