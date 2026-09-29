```php
<?php

$student_info = array (
    "id" => 205,
    "name" => "Ahmed Hassan",
    "age" => 23,
    "address" => "Waberi District",
    "status" => "married",
    "weight" => 72.5
);

print_r ($student_info);

echo "<br>";

echo $student_info['address'];

echo "<br>";

$student_info["id"] = 205;
$student_info["name"] = "Ahmed Hassan";
$student_info["age"] = 23;
$student_info["address"] = "Waberi District";
$student_info["status"] = "married";
$student_info["weight"] = 72.5;

print_r ($student_info);

echo "<br>";

foreach($student_info as $value) {
    echo "$value, ";
}

echo "<br>";

foreach($student_info as $key => $value) {
    echo "$key: $value <br>";
}

$students = array (
    array (201, "Hassan", 22, "single"),
    array (202, "Yusuf", 27, "married"),
    array (203, "Fatima", 25, "single"),
    array (204, "Ali", 31, "married"),
    array (205, "Maryan", 28, "single")
);

print_r($students);

echo "<br>";

echo $students[2][1];

echo "<br>";

echo $students[3][2];

echo "<br>";

foreach ($students as $info) {
    foreach ($info as $value) {
        echo "$value, ";
    }
    echo "<br>";
}

$students = array (
    array ("id"=>201, "name"=>"Hassan", "age"=>22, "status"=>"single"),
    array ("id"=>202, "name"=>"Yusuf", "age"=>27, "status"=>"married"),
    array ("id"=>203, "name"=>"Fatima", "age"=>25, "status"=>"single"),
    array ("id"=>204, "name"=>"Ali", "age"=>31, "status"=>"married"),
    array ("id"=>205, "name"=>"Maryan", "age"=>28, "status"=>"single")
);

echo "<br>";

echo $students[2]["name"];

echo "<br>";

echo $students[3]["age"];

echo "<br>";

foreach ($students as $info) {
    foreach ($info as $key => $value) {
        echo "$key : $value ";
    }
    echo "<br>";
}

?>
```
