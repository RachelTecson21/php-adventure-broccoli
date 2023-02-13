<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <?php

    function sum($num) {
        $sum = 0;
            for ($i = 0; $i < strlen($num); $i++){
            $sum += $num[$i];
        }

            return $sum;
}

        $num = "123456789";
            echo sum($num);
?>