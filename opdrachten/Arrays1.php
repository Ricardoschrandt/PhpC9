<?php


$apen = array("chimpansee","oerang oetang", "gorilla", "neusaap");

$apen[4] = "mandrill";

$apen[6] = "baviaan";
echo "<ul>";
foreach ($apen as $aap) {
    echo "<li>".$aap."</li>";
}
echo "</ul>";

