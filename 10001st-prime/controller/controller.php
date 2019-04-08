<?php

    //a function to check whether the number is prime or not
    function isPrime($num)
    {
        if ($num < 2)
        {
            return false;
        }
        
        if (($num % 2 == 0) && ($num > 2))
        {	// a multiple of 2, but not 2 itself
            return false;
        }
        
        for ($i = 3; $i <= sqrt($num); $i += 2)
        {
            if ($num % $i == 0)
            {	// found a factor of x
                return false;
            }
        }
        
        return true;
    }

    function getPrime($limitInput){

        // declare primeNum array, limit variables, and i variables
        $primeNum = array(2);
        $limit = $limitInput;
        $i = 1;

        while (true) {
            $i += 2;
            
            if (isPrime($i)) {
                //if i is prime number, than add it to array
                array_push($primeNum, $i);
                
                //stop looping if array length reached the limit
                if (count($primeNum) == $limit) {
                    break;
                }
            }
        }
        
        //define the primeNum that desired based on limit
        $desiredPrimeNum = $primeNum[$limit-1];

        $output = json_encode(array(
            "limit" => $limit,
            "primeNum" => $desiredPrimeNum
        ));

        echo $output;

    }

    
?>