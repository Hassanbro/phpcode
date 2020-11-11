<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Development</title>
</head>
<body>

<?php

$my_str = 'Welcome to the world of computer programming';
$name =  "John";
$lastName =  "Doe";

echo strlen($my_str);
echo "<br>";

echo str_word_count($my_str);

echo "<br>";


//Concatination
echo "Welcome Mr.". " " . $name. " " .$lastName;

echo "<br>";

//String trimming

$str = " Hello World! ";
$stc = "hello world to coders. how are you all doing today";
echo "Without trimming:"  . $str;
echo "<br>";
echo "with trimming:"  . trim($str);

//converting to Capital Letters
echo "<br>";
echo ucfirst($stc);

echo "<br>";

echo ucwords($stc);

echo "<br>";

//conditional statements
$d = date("D");
if($d == "Wed"){
	echo "Have a nice weekend";
} elseif($d == "Sun"){
	echo "Have a nice Sunday";
} else{
	echo "Have a nice day";
}

?>

  
</body>
</html>