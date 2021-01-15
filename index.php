<?php
//Step 1.

/*
 * Eleanor Carl Alisa and Heather
 * 1/15/2021
 * SDEV328
 * PHP Array Practice
 *
*/


?>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <div style="padding: 2%; background: lightblue; width: 25%; border: solid black thin">
<title> Pair Program 2 </title>
<header>Pair Program 2</header>
<?php
/*
 * Step 2 Create the array and Comment Block for each member.
 */
echo "<h3>PHP Array Practice</h3>";
$numbers = [7, 9, 8, 9, 8, 8, 6];
include 'include.php';
/*
 * Step 3 Print each array on a new line
 */
echo "<div style='background: lightpink; border: solid black thin; padding: 5px;'>";
echo "<b>Print Array</b>";
echo "<br><br>";
printArr($numbers);
echo "</div>";
/*
 * Step 4 Remove Duplicates of Array
 */
echo "<div style='background: lightpink; border: solid black thin; padding: 5px;'>";
printLargest($numbers);
echo "</div>";
/*
 * Step 5 Remove Duplicates of Array
 */
echo "<div style='background: lightpink; border: solid black thin; padding: 5px;'>";
removeDups($numbers);
echo "</div>";
/*
 * Step 6 Show distribution of the Array
 */
echo "<div style='background: lightpink; border: solid black thin; padding: 5px;'>";
distribution($numbers);
echo "</div>";


?>