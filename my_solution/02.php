<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->

<?php
    function chk_if_Palindrome($samp_string) {
        $o = 0;
        $s = strlen($samp_string) - 1;
        $ehl = 0;

            while($s > $o){
                if ($samp_string[$o] != $samp_string[$s]){
                $ehl = 1;
                break;
            }
      
        $o++;
        $s--;
    }

            if ($ehl == 0){
                echo "'".$samp_string."', is a Palindrome string.\n";
                } 
            else {
                echo "'".$samp_string."', is not a Palindrome string.\n";
                }
  }

        chk_if_Palindrome("peep");
        chk_if_Palindrome("gwak");
        chk_if_Palindrome("deified");
?>