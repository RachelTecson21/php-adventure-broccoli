<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->

<?php
    function Lstring($array) {

        $data = "";

            foreach ($array as $string) {

            if (strlen($string) > strlen($data)) {
                $data = $string;
                }
            }

        return $data;

        }

        $array = array("Rachel", "Tecson");

        echo Lstring($array);

?> 