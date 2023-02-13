<!-- 
    Write a program that outputs the first n triangular numbers.
 -->

 <?php
    $n = 6; 
        echo "n = " . $n . "\n";

            echo "<br><br>";
    
        $count = 1;
            for ($i = $n; $i > 0; $i--) 
            {
                for ($j = $i; $j < $n + 1; $j++) {
                printf("%4s", $count);
                $count++;
                }

                    echo "<br>";
             }
?>