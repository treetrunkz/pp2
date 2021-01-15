<?php


function printArr($arr){
foreach($arr as $x){
echo $x;
echo "<br>";
}
echo "<br>";
}

function printLargest($arr){
    echo "<b>Largest Number:</b>";
    echo "<br><br>";
    echo max($arr);
    echo "<br><br>";
}

function removeDups($arr){
    echo "<b>Removed Duplicates:</b>";
    echo "<br><br>";
    printArr( array_unique($arr) );

}

function distribution($arr){
    echo "<br><br>";
    echo "<b>Show distribution of array:</b>";
    echo "<br><br>";
    $uniq = array_count_values($arr);
    print_r($uniq);
}
