<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->

  <html><body>
<form action="09.php" method="GET">
            <div>
                <label>enter word</label>
                <input type="text" name="str" default=" ">
            </div>

                <input type="submit" >
        </form>


        </body>
</html> 

<?php

    function rem($input) {
        $vowels = array("a", "e", "i", "o", "u");
        $output = str_replace($vowels, "",  strtolower($input));
        return $output;
        }

    echo rem($_GET["str"]);

?>