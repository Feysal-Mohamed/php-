```php
<?php

// =====================================================
// QUESTION 1
// One Dimensional Array
// =====================================================

echo "<h1>PHP Assignment</h1>";

echo "<h2>Question 1</h2>";


// 1. Declare and initialize the array

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);


// 2. Print all elements

echo "<b>All elements:</b><br>";

foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br><br>";


// 3. Calculate and print total of all elements

$total = 0;

foreach ($numbers as $number) {
    $total = $total + $number;
}

echo "Total of all elements = " . $total;

echo "<br>";


// 4. Calculate and print total of even elements

$evenTotal = 0;

foreach ($numbers as $number) {

    if ($number % 2 == 0) {
        $evenTotal = $evenTotal + $number;
    }

}

echo "Total of even elements = " . $evenTotal;

echo "<br>";


// 5. Calculate and print total of odd elements

$oddTotal = 0;

foreach ($numbers as $number) {

    if ($number % 2 != 0) {
        $oddTotal = $oddTotal + $number;
    }

}

echo "Total of odd elements = " . $oddTotal;

echo "<br>";


// 6. Find minimum element

$minimum = $numbers[0];

foreach ($numbers as $number) {

    if ($number < $minimum) {
        $minimum = $number;
    }

}

echo "Minimum element = " . $minimum;

echo "<br>";


// Find positions of minimum element

echo "Position(s) of minimum = ";

foreach ($numbers as $position => $number) {

    if ($number == $minimum) {
        echo $position . " ";
    }

}

echo "<br>";


// 7. Find maximum element

$maximum = $numbers[0];

foreach ($numbers as $number) {

    if ($number > $maximum) {
        $maximum = $number;
    }

}

echo "Maximum element = " . $maximum;

echo "<br>";


// Find positions of maximum element

echo "Position(s) of maximum = ";

foreach ($numbers as $position => $number) {

    if ($number == $maximum) {
        echo $position . " ";
    }

}

echo "<hr>";


// =====================================================
// QUESTION 2
// Two Dimensional Associative Array
// =====================================================

echo "<h2>Question 2</h2>";


// Declare the two dimensional associative array

$colors = array(

    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )

);


// Print array as a table

echo "<table border='1' cellpadding='10'>";

echo "<tr>";

echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";

echo "</tr>";


foreach ($colors as $rowName => $row) {

    echo "<tr>";

    echo "<th>" . $rowName . "</th>";

    foreach ($row as $value) {

        echo "<td>" . $value . "</td>";

    }

    echo "</tr>";

}

echo "</table>";

echo "<hr>";


// =====================================================
// QUESTION 3
// Square Two Dimensional Array
// =====================================================

echo "<h2>Question 3</h2>";


// 1. Declare and initialize the array

$matrix = array(

    array(2, -6, 8),

    array(-6, 1, 6),

    array(7, 8, -6)

);


// 2. Print all elements

echo "<b>All elements:</b><br><br>";

echo "<table border='1' cellpadding='10'>";

for ($i = 0; $i < 3; $i++) {

    echo "<tr>";

    for ($j = 0; $j < 3; $j++) {

        echo "<td>";
        echo $matrix[$i][$j];
        echo "</td>";

    }

    echo "</tr>";

}

echo "</table>";

echo "<br>";


// 3. Calculate total of odd elements

$oddTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] % 2 != 0) {

            $oddTotal = $oddTotal + $matrix[$i][$j];

        }

    }

}

echo "Total of odd elements = " . $oddTotal;

echo "<br>";


// 4. Calculate total of even elements

$evenTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] % 2 == 0) {

            $evenTotal = $evenTotal + $matrix[$i][$j];

        }

    }

}

echo "Total of even elements = " . $evenTotal;

echo "<br><br>";


// 5. Calculate total of each row

echo "<b>Total of each row:</b><br>";

for ($i = 0; $i < 3; $i++) {

    $rowTotal = 0;

    for ($j = 0; $j < 3; $j++) {

        $rowTotal = $rowTotal + $matrix[$i][$j];

    }

    echo "Row " . ($i + 1) . " = " . $rowTotal . "<br>";

}

echo "<br>";


// 6. Calculate total of each column

echo "<b>Total of each column:</b><br>";

for ($j = 0; $j < 3; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < 3; $i++) {

        $columnTotal = $columnTotal + $matrix[$i][$j];

    }

    echo "Column " . ($j + 1) . " = " . $columnTotal . "<br>";

}

echo "<br>";


// 7. Calculate total of each diagonal


// First diagonal

$firstDiagonal = 0;

for ($i = 0; $i < 3; $i++) {

    $firstDiagonal = $firstDiagonal + $matrix[$i][$i];

}


// Second diagonal

$secondDiagonal = 0;

for ($i = 0; $i < 3; $i++) {

    $secondDiagonal = $secondDiagonal + $matrix[$i][2 - $i];

}


echo "<b>Total of each diagonal:</b><br>";

echo "First diagonal = " . $firstDiagonal . "<br>";

echo "Second diagonal = " . $secondDiagonal . "<br><br>";


// 8. Calculate total of all elements

$total = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        $total = $total + $matrix[$i][$j];

    }

}

echo "Total of all elements = " . $total;

echo "<br>";


// 9. Find minimum element and its positions

$minimum = $matrix[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] < $minimum) {

            $minimum = $matrix[$i][$j];

        }

    }

}

echo "Minimum element = " . $minimum . "<br>";

echo "Position(s) of minimum = ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] == $minimum) {

            echo "(" . $i . "," . $j . ") ";

        }

    }

}

echo "<br>";


// 10. Find maximum element and its positions

$maximum = $matrix[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] > $maximum) {

            $maximum = $matrix[$i][$j];

        }

    }

}

echo "Maximum element = " . $maximum . "<br>";

echo "Position(s) of maximum = ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] == $maximum) {

            echo "(" . $i . "," . $j . ") ";

        }

    }

}

echo "<hr>";


// =====================================================
// QUESTION 4
// Two Dimensional Associative Array
// =====================================================

echo "<h2>Question 4</h2>";


// The table in the assignment contains CA221 twice.
// Therefore, we use a normal array so both records can be stored.

$students = array(

    array(
        "ID" => "CA221",
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),

    array(
        "ID" => "CA223",
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),

    array(
        "ID" => "CA221",
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )

);


// Print table

echo "<table border='1' cellpadding='10'>";

echo "<tr>";

echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";

echo "</tr>";


foreach ($students as $student) {

    echo "<tr>";

    echo "<td>" . $student["ID"] . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";

}

echo "</table>";

echo "<hr>";


// =====================================================
// QUESTION 5
// Student Transcript
// =====================================================

echo "<h2>Question 5</h2>";


// Declare transcript array

$transcript = array(

    "Semester 1" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )

    ),


    "Semester 2" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )

    )

);


// Print transcript
// Semester is ONE column

echo "<table border='1' cellpadding='8'>";

echo "<tr>";

echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";

echo "</tr>";


// Loop through semesters

foreach ($transcript as $semester => $subjects) {

    $firstRow = true;

    foreach ($subjects as $course => $marks) {

        echo "<tr>";


        // Print semester name only on the first row
        // and merge the 3 rows together

        if ($firstRow == true) {

            echo "<td rowspan='3'>";
            echo $semester;
            echo "</td>";

            $firstRow = false;

        }


        echo "<td>" . $course . "</td>";

        echo "<td>" . $marks["CW1"] . "</td>";

        echo "<td>" . $marks["MidTerm"] . "</td>";

        echo "<td>" . $marks["CW2"] . "</td>";

        echo "<td>" . $marks["Final"] . "</td>";

        echo "<td>" . $marks["Total"] . "</td>";

        echo "<td>" . $marks["Status"] . "</td>";


        echo "</tr>";

    }

}


echo "</table>";

?>
```
