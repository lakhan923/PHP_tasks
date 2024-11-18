<?php

// Outer loop for rows
for ($i = 0; $i <= 9; $i++) {
    
    // Inner loop for repeated numbers in each row
    for ($j = 0; $j <= $i; $j++) {
        echo $i . " ";
    }

    // Move to the next line after each row
    echo "<br>";
}

?>