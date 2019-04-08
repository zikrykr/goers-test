<?php
function getSum($number){

    //declare two first fibonacci numbers
    $f1 = 1;
    $f2 = 1;

    //declare result, maximum value, and sum variable
    $result = 0;
    $maxValue = $number;
    $sum = 0;

    
    while ($f2 < $maxValue) {
        $result = $f1 + $f2;
        $f1 = $f2;
        $f2 = $result;
        //check for the even-valued terms and sum it
        if ($result%2 === 0) {
            $sum = $sum + $result;
        }
    }

    $output = json_encode(array(
        "max_value" => $maxValue,
        "sum" => $sum
    ));

    echo $output;
}
?>