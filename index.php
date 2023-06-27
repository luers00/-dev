<?php

function st ($e){
    $d = 1;
    while ($d <= $e ) {
        for ($i=1; $i <= $d; $i++) { 
                echo "0";
        }
        echo "<br>";
        $d++;
    }
}
st(10);
?>
