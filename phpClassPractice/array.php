```php
<?php

$fruits = array ("Mango", "Grapes", "Watermelon");

print_r($fruits);

echo "<br>";

echo $fruits[0] . " " . $fruits[1] . " " . $fruits[2];

echo "<br>";

var_dump($fruits);

echo "<br>";

$cities[0] = "Garowe";
$cities[1] = "Berbera";
$cities[2] = "Burao";
$cities[5] = "Jowhar";

print_r($cities);

echo "<br>";

echo "Index of 5: ", $cities[5];

echo "<br>";

$cars[] = 'Toyota';
$cars[] = 'Honda';
$cars[] = 'Ford';
$cars[] = 'Hyundai';
$cars[] = 'Kia';

var_dump($cars);

echo "<br>";

$student_info = array (
    "205",
    "Ahmed Hassan",
    23,
    "married",
    175.5
);

var_dump($student_info);

print_r($student_info);

echo "<br>";
echo "<br>";

for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i], ";
}

echo "<br>";

foreach ($cars as $car) {
    echo "$car, ";
}

echo "<br>";

foreach ($student_info as $value) {
    echo "$value <br>";
}

echo "<br>";

$numbers = array (15, 8, 22, -3, 17, 12, 6, 45, 9, 4, 18, 25, 3, 7, 10);

$total = 0;

foreach ($numbers as $n) {
    $total += $n;
}

echo "The Total numbers is ", $total;

echo "<br>";

$array1 = array (2, 4, 6, 8, 10);
$array2 = array (1, 3, 5, 7, 9);

for ($i = 0; $i < count($array1); $i++)
    $array3[$i] = $array1[$i] + $array2[$i];

echo "Array elements are:<br>";

foreach ($array3 as $item)
    echo ("$item, ");

echo "<br>";
echo "<br>";

$student_info = array (
    "id" => 205,
    "name" => "Ahmed Hassan",
    "age" => 23,
    "address" => "Waberi District",
    "status" => "married",
    "weight" => 175.5
);

print_r ($student_info);

echo "<br>";

foreach ($student_info as $value) {
    echo "$value, ";
}

echo "<br>";

foreach($student_info as $key => $value) {
    echo "$key : $value <br>";
}

?>
```
