```php
<?php

$count = 2;

while ($count <= 20) {
    echo "$count, ";
    $count++;
}

echo "<br>";

$i = 1;

do {
    echo "$i * 9 = " . $i * 9 . "<br>";
    $i++;
} while ($i <= 9);

echo "<br>";

$result = 1;

for ($n = 6; $n >= 1; $n--) {
    $result = $result * $n;
}

echo "The Factorial of 6! = " . $result;

echo "<br>";

$n = 6;
$result = 1;

do {
    $result = $result * $n;

    if ($n == 1) {
        echo "$n";
        break;
    }
    else {
        echo "$n * ";
    }

    $n--;
} while ($n >= 1);

echo "<br>";

echo "The Factorial of 6! = " . $result;

echo "<br>";

$count = 2;

while ($count <= 20) {
    echo "$count, ";

    if ($count == 14)
        break;

    $count++;
}


echo "<br>";


$count = 0;

do {
    $count++;

    if ($count % 2 == 0) {
        continue;
    }

    echo "$count, ";

} while ($count <= 19);

echo "<br>";

$week = 4;
$day = 5;

for ($i = 1; $i <= $week; $i++) {

    echo "Week " . $i . ":<br>";

    for ($j = 1; $j <= $day; $j++) {
        echo "&nbsp; &nbsp; Day " . $j . "<br>";
    }
}

echo "<br>";

for ($i = 1; $i <= 7; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "<br>";
}

?>
```
