<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->

<?php

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $length = count($array);

            $lenght2 = $length / 2;

                $median_index = (int) $lenght2;

                    $median = $array[$median_index];

                        echo $median;  
?>