<?php

$tableau = array_fill(0,100000,1) ;


echo "debut traitement";
echo PHP_EOL;

$i=0;
foreach ($tableau as $a) {
    $pourcentage = $i / 1000;
    echo "En cours : ".round($pourcentage,0)."%"."\r";
    $i+=1;
}





