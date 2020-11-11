<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Development</title>
</head>
<body>

<?php
// My first PHP codes

echo "<h1>This is my first code in PHP</h1>";

echo "<br>";

echo 'I am learning faster than I thought';

echo "<br>";

$fname = "Hassan";
$sname = "Hamadu";
$age = 43;

echo $fname. " " . $sname . " is " . $age;

//Data Types
$a = 123;
var_dump($a);

$b = -123;
var_dump($b);

$x = 10;
$y = 15;

echo "Ghc" .$x * $y;

$password = "password";
$entered = "Password";

var_dump($password==$entered);

var_dump($password===$entered);

//logical comparison

$year = 2014;

if(($year % 400 == 0) || (($year % 100 !=0) && ($year % 4 == 0))) {
	echo $year . " " . "is a leap year";
}else{
	echo $year . " " .  "is not a leap year";
}


?>

  
</body>
</html>