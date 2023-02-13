<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->

  <?php

        $samp_string = "Lim Nayeon, Yoo Jeongyeon, Hirai Momo, Minatozaki Sana, Park Jihyo, Kim Dahyun, Son Chaeyoung, Chou Tzuyu";
        
        $trans = array("A" => "","a"=>"","E"=>"","e"=>"","I"=>"", "i" => "","O"=>"","o"=>"","U"=>"","u"=>"");

        echo strtr($samp_string, $trans);
?>