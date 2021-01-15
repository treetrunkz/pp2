<?php
//Step 1.

//Eleanor Carl Alisa and Heather
// 1/15/2021
// SDEV328
// PHP Array Practice


?>
<title> Pair Program 2 </title>
<header>Pair Program 2</header>
<?php
echo "PHP Array Practice";

$numbers = [7, 9, 8, 9, 8, 8, 6];

function printArr($arr){
    echo "<br>";
    foreach($arr as $x){
        echo $x;
        echo "<br>";
    }
}

printArr($numbers);
?>