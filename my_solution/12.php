<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->

<?php

    function password_generate($chars) {
        $data = '09063453002RACHELTECSONmakiiithimehl@#$!%^&*102015';
            return substr(str_shuffle($data), 0, $chars);
            }
            
                echo password_generate(10)."\n";
?>