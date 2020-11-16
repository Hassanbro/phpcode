<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array in PHP</title>
</head>
<body>

<?php

$colors = array("Red", "Green", "Blue", "Cyan");
$ages = array(
  "Peter" => 22,
  "Clarke" => 32,
  "John" => 28
);
// Printing array structure
print_r($colors);
echo "<h3> Variable dump</h3>";

var_dump($colors);
echo "<br>";
echo "<br>";

sort($colors);
print_r($colors);
echo "<br>";
echo "<br>";

rsort($colors);
print_r($colors);
echo "<br>";
echo "<br>";
print_r($ages);

//Multidimesional
$contacts = array(
  array(
    "name" => "Peter Paker",
    "email" => "peter@gmail.com",
  ),
  array(
    "name" => "John Paker",
    "email" => "john@gmail.com",
  ),
  array(
    "name" => "Eric Paker",
    "email" => "eric@gmail.com",
  )
);
print_r($contacts);
echo "<br>";
echo "<br>";
echo "Peter Parker's email is ". $contacts[2]["name"];


?>

  
</body>
</html>