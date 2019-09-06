<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 5; $j >= 5 - $i; $j--) {
        echo "*" . "  ";
    }
    echo "<br>";
}