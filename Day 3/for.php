<?php

    echo "<table border='2'>";
    for ($i=0; $i <100 ; $i++) { 
        echo "<tr>";
        if ($i%2==0) {
            echo "<td bgcolor='blue'>$i</td>";
        }else {
            echo "<td bgcolor='pink'>$i</td>";
        }
        echo "</tr>";
    }
    echo "<table>";