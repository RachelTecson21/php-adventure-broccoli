<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<?php

        $array = array(1, 5, 9, 7, 15, 12, 19, 17, 25);

            $average = array_sum($array) / count($array);

                echo $average;

?>