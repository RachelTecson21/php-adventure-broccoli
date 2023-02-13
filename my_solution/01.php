<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<?php
     $sample_v = ['A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u'];
    $character = "l";

        if (in_array(strtolower($character), $sample_v))
            echo $character.", the character you entered, is a vowel.";
        else
            echo $character.", the character you entered, is a consonant.";
?>