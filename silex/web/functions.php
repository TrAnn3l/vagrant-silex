<?php

function Hello($Name="World") {
    echo("Hello $Name!");
}

function square($Number=1) {
    return $Number*$Number;
}

function fak($n=1) {
    if ($n > 0) {
        return $n*fak($n-1);
    } else {
       return 1;
    }
}


Hello();
echo("<br/>");
Hello("Bob");

echo("<hr/>");

for ($i = 0; $i <= 5; $i++) {
    echo("Die Quadratzahl von $i ist " . square($i));
    echo("<br/>");
}

echo("<hr/>");

for ($j = 0; $j <= 5; $j++) {
    echo("Die Fakult&auml;t von $j ist " . fak($j));
    echo("<br/>");
}

echo("<hr/>");