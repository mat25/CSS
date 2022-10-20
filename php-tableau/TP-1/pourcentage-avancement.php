<?php

$tableau = array_fill(0,100000,1) ;



$i=0;
foreach ($tableau as $a) {
    $pourcentage = $i / 1000;
    echo "En cours : ".round($pourcentage,0)."%"."\r";
    $i+=1;
}





