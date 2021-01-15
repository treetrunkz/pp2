<?php


function printArr($arr){

foreach($arr as $x){
echo $x;
echo "<br>";
}
}

function printLargest($arr){
    echo "Largest Number:";
    echo "<br><br>";
    echo max($arr);
    echo "<br><br>";
}

function removeDups($arr){
    echo "<br><br>";
    echo "Removed Duplicates:";
    echo "<br><br>";
    printArr( array_unique($arr) );
    echo "<br><br>";
}

function distribution($arr){
    echo "<br><br>";
    echo "Show distribution of array:";
    echo "<br><br>";
    $uniq = array_count_values($arr);
    print_r($uniq);
}
