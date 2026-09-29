```php
<?php

$name = "Ahmed Hassan";
$age = 23;

echo "My name is $name";
echo "<br>";
echo "My age is $age <br>";

$message = "Hello World";

echo "The position of 5 is: " . $message[5] . "<br>";
echo "Check whether the word W contains \"$message\": " . strpos($message, "W");

echo "<br>";

$count = strlen($message);
echo "This message \"$message\" contain $count characters <br>";

$message = "PHP is a popular programming language";
$word_count = str_word_count($message);

echo "This message contains $word_count words <br>";

$message = "Hello World";

echo str_replace("World", "PHP", $message);

echo "<br>";

echo "Hello" . " PHP";

echo "<br>";

define("PI", 3.14);

$pi = "3.14";
$radius = 8;

$area = $pi * ($radius * $radius);

echo "The area of circle is ", $area;

echo "<br>";

$num = 24680 * 13579;

echo $num;

echo "<br>";

echo substr($num, 2, 1);

echo "<h5>Arithmetic Operators </h5>";

$x = 9;
$y = 3;

$result = $x + $y;
echo "The sum of $x and $y = ", $result;

echo "<br>";

$result = $x - $y;
echo "The difference of $x and $y = ", $result;

echo "<br>";

$result = $x * $y;
echo "The product of $x and $y = ", $result;

echo "<br>";

$result = $x / $y;
echo "The division of $x and $y = ", $result;

echo "<br>";

$result = $x % $y;
echo "The Modolus of $x and $y = ", $result;

echo "<br>";

$result = 2 + 4 * 5 - 2 * (6 / 3);

echo "The result is ", $result;

echo "<br>";

$result = 2 + 4 * 5 - 2 * (8 / 4) > 15 || 6 / 3 == 2 && !false;

echo "The result is ", $result ? 'True' : 'False';

echo "<h5>Concatenation Operators </h5>";

$a = "Hello ";
$b = "PHP & ";
$c = "MySQL";

echo $a . $b . $c, "<br>";

$greeting = "Welcome, ";
$message = "Nice to meet you!";

echo $greeting . $message;

echo "<h5>Increment / Decrement Operators </h5>";

$x = 8;

echo ++$x, " First increments then prints <br>";
echo $x, "<br>";

$x = 8;

echo $x++, " First prints then increments <br>";
echo $x, "<br>";

$x = 8;

echo --$x, " First decrements then prints <br>";
echo $x, "<br>";

$x = 8;

echo $x--, " First prints then decrements <br>";
echo $x;

echo "<br>";

echo "<h5>Arithmetic Assignment Operators </h5>";

$x = 50;

echo " x +2 value is : ", $x += 2, "";
echo " x -2 value is : ", $x -= 2, "";
echo " x /2 value is : ", $x /= 2, "";
echo " x *2 value is : ", $x *= 2, "";
echo " x %2 value is : ", $x %= 2, "";

echo "<br>";

echo "<h5>Comparison Operators </h5>";

$x = 8;
$y = 6;

echo "Check whether X and Y is equal: " . ($x == $y) . "<br>";
echo "Check whether X and Y is not equal: " . ($x != $y) . "<br>";

?>
```
