
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Assignment 2</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-300 text-slate-800">

<div class="max-w-7xl mx-auto px-4 py-10">

    <!-- ============================= -->
    <!-- HEADER -->
    <!-- ============================= -->

    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl shadow-xl p-8 mb-10 text-white">

        <h1 class="text-4xl font-bold mb-2">
            PHP Assignment 2
        </h1>

        <p class="text-blue-100">
            One Dimensional Arrays & Two Dimensional Arrays
        </p>

    </div>


    <!-- ===================================================== -->
    <!-- QUESTION 1 -->
    <!-- ===================================================== -->

    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">

        <div class="border-b pb-4 mb-6">
            <h2 class="text-2xl font-bold text-blue-600">
                Question 1
            </h2>

            <p class="text-gray-500 mt-1">
                One Dimensional Array
            </p>
        </div>


        <?php

        // Declare and initialize the array

        $numbers = array(
            5, -7, 12, 10, -7, 11,
            -6, 12, 1, -7, 2, 9
        );


        // Print all elements

        echo "<div class='mb-6'>";

        echo "<h3 class='font-semibold text-gray-700 mb-2'>
                All Elements
              </h3>";

        echo "<div class='flex flex-wrap gap-2'>";

        foreach ($numbers as $number) {

            echo "<span class='px-3 py-1 bg-blue-100 text-blue-700 rounded-lg font-medium'>
                    $number
                  </span>";
        }

        echo "</div>";
        echo "</div>";


        // Calculate total

        $total = 0;

        foreach ($numbers as $number) {

            $total = $total + $number;
        }


        // Calculate even total

        $evenTotal = 0;

        foreach ($numbers as $number) {

            if ($number % 2 == 0) {

                $evenTotal = $evenTotal + $number;
            }
        }


        // Calculate odd total

        $oddTotal = 0;

        foreach ($numbers as $number) {

            if ($number % 2 != 0) {

                $oddTotal = $oddTotal + $number;
            }
        }


        // Find minimum

        $minimum = $numbers[0];

        foreach ($numbers as $number) {

            if ($number < $minimum) {

                $minimum = $number;
            }
        }


        // Find maximum

        $maximum = $numbers[0];

        foreach ($numbers as $number) {

            if ($number > $maximum) {

                $maximum = $number;
            }
        }

        ?>


        <!-- Results -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <div class="bg-slate-50 border rounded-xl p-5">
                <p class="text-sm text-gray-500">Total</p>
                <p class="text-2xl font-bold text-gray-800">
                    <?php echo $total; ?>
                </p>
            </div>


            <div class="bg-green-50 border border-green-200 rounded-xl p-5">
                <p class="text-sm text-green-600">Even Total</p>
                <p class="text-2xl font-bold text-green-700">
                    <?php echo $evenTotal; ?>
                </p>
            </div>


            <div class="bg-purple-50 border border-purple-200 rounded-xl p-5">
                <p class="text-sm text-purple-600">Odd Total</p>
                <p class="text-2xl font-bold text-purple-700">
                    <?php echo $oddTotal; ?>
                </p>
            </div>


            <div class="bg-red-50 border border-red-200 rounded-xl p-5">
                <p class="text-sm text-red-600">Minimum</p>
                <p class="text-2xl font-bold text-red-700">
                    <?php echo $minimum; ?>
                </p>
            </div>


            <div class="bg-blue-50 border border-blue-200 rounded-xl p-5">
                <p class="text-sm text-blue-600">Maximum</p>
                <p class="text-2xl font-bold text-blue-700">
                    <?php echo $maximum; ?>
                </p>
            </div>

        </div>


        <!-- Positions -->

        <div class="grid md:grid-cols-2 gap-4 mt-4">

            <div class="bg-red-50 border border-red-200 rounded-xl p-5">

                <h3 class="font-semibold text-red-700 mb-2">
                    Position(s) of Minimum
                </h3>

                <?php

                foreach ($numbers as $position => $number) {

                    if ($number == $minimum) {

                        echo "<span class='inline-block bg-red-100 text-red-700 px-3 py-1 rounded-lg mr-2'>
                                $position
                              </span>";
                    }
                }

                ?>

            </div>


            <div class="bg-blue-50 border border-blue-200 rounded-xl p-5">

                <h3 class="font-semibold text-blue-700 mb-2">
                    Position(s) of Maximum
                </h3>

                <?php

                foreach ($numbers as $position => $number) {

                    if ($number == $maximum) {

                        echo "<span class='inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-lg mr-2'>
                                $position
                              </span>";
                    }
                }

                ?>

            </div>

        </div>

    </div>



    <!-- ===================================================== -->
    <!-- QUESTION 2 -->
    <!-- ===================================================== -->

    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">

        <div class="border-b pb-4 mb-6">

            <h2 class="text-2xl font-bold text-blue-600">
                Question 2
            </h2>

            <p class="text-gray-500 mt-1">
                Two Dimensional Associative Array
            </p>

        </div>


        <?php

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

        ?>


        <div class="overflow-x-auto">

            <table class="w-full border-collapse">

                <thead>

                <tr class="bg-blue-600 text-white">

                    <th class="border border-blue-500 px-5 py-3 text-left">
                    </th>

                    <th class="border border-blue-500 px-5 py-3 text-left">
                        Red
                    </th>

                    <th class="border border-blue-500 px-5 py-3 text-left">
                        Green
                    </th>

                    <th class="border border-blue-500 px-5 py-3 text-left">
                        Blue
                    </th>

                </tr>

                </thead>


                <tbody>

                <?php

                foreach ($colors as $rowName => $row) {

                    echo "<tr class='hover:bg-blue-50 transition'>";

                    echo "<th class='border px-5 py-3 text-left bg-slate-50 font-semibold'>
                            $rowName
                          </th>";

                    foreach ($row as $value) {

                        echo "<td class='border px-5 py-3'>
                                $value
                              </td>";
                    }

                    echo "</tr>";
                }

                ?>

                </tbody>

            </table>

        </div>

    </div>



    <!-- ===================================================== -->
    <!-- QUESTION 3 -->
    <!-- ===================================================== -->

    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">

        <div class="border-b pb-4 mb-6">

            <h2 class="text-2xl font-bold text-blue-600">
                Question 3
            </h2>

            <p class="text-gray-500 mt-1">
                Square Two Dimensional Array
            </p>

        </div>


        <?php

        $matrix = array(

            array(2, -6, 8),

            array(-6, 1, 6),

            array(7, 8, -6)

        );

        ?>


        <!-- Matrix -->

        <div class="mb-8">

            <h3 class="font-semibold text-gray-700 mb-3">
                Matrix
            </h3>


            <div class="overflow-x-auto">

                <table class="border-collapse">

                    <?php

                    for ($i = 0; $i < 3; $i++) {

                        echo "<tr>";

                        for ($j = 0; $j < 3; $j++) {

                            echo "<td class='border-2 border-white bg-blue-100 text-blue-800 font-bold text-xl text-center w-20 h-16'>
                                    {$matrix[$i][$j]}
                                  </td>";
                        }

                        echo "</tr>";
                    }

                    ?>

                </table>

            </div>

        </div>


        <?php

        // Odd total

        $oddTotal = 0;

        for ($i = 0; $i < 3; $i++) {

            for ($j = 0; $j < 3; $j++) {

                if ($matrix[$i][$j] % 2 != 0) {

                    $oddTotal = $oddTotal + $matrix[$i][$j];
                }
            }
        }


        // Even total

        $evenTotal = 0;

        for ($i = 0; $i < 3; $i++) {

            for ($j = 0; $j < 3; $j++) {

                if ($matrix[$i][$j] % 2 == 0) {

                    $evenTotal = $evenTotal + $matrix[$i][$j];
                }
            }
        }


        // All total

        $total = 0;

        for ($i = 0; $i < 3; $i++) {

            for ($j = 0; $j < 3; $j++) {

                $total = $total + $matrix[$i][$j];
            }
        }


        // Minimum

        $minimum = $matrix[0][0];

        for ($i = 0; $i < 3; $i++) {

            for ($j = 0; $j < 3; $j++) {

                if ($matrix[$i][$j] < $minimum) {

                    $minimum = $matrix[$i][$j];
                }
            }
        }


        // Maximum

        $maximum = $matrix[0][0];

        for ($i = 0; $i < 3; $i++) {

            for ($j = 0; $j < 3; $j++) {

                if ($matrix[$i][$j] > $maximum) {

                    $maximum = $matrix[$i][$j];
                }
            }
        }


        // Diagonal 1

        $firstDiagonal = 0;

        for ($i = 0; $i < 3; $i++) {

            $firstDiagonal = $firstDiagonal + $matrix[$i][$i];
        }


        // Diagonal 2

        $secondDiagonal = 0;

        for ($i = 0; $i < 3; $i++) {

            $secondDiagonal = $secondDiagonal + $matrix[$i][2 - $i];
        }

        ?>


        <!-- Main results -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            <div class="bg-green-50 border border-green-200 rounded-xl p-5">

                <p class="text-sm text-green-600">
                    Odd Total
                </p>

                <p class="text-2xl font-bold text-green-700">
                    <?php echo $oddTotal; ?>
                </p>

            </div>


            <div class="bg-blue-50 border border-blue-200 rounded-xl p-5">

                <p class="text-sm text-blue-600">
                    Even Total
                </p>

                <p class="text-2xl font-bold text-blue-700">
                    <?php echo $evenTotal; ?>
                </p>

            </div>


            <div class="bg-purple-50 border border-purple-200 rounded-xl p-5">

                <p class="text-sm text-purple-600">
                    Total
                </p>

                <p class="text-2xl font-bold text-purple-700">
                    <?php echo $total; ?>
                </p>

            </div>


            <div class="bg-red-50 border border-red-200 rounded-xl p-5">

                <p class="text-sm text-red-600">
                    Minimum
                </p>

                <p class="text-2xl font-bold text-red-700">
                    <?php echo $minimum; ?>
                </p>

            </div>


            <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-5">

                <p class="text-sm text-indigo-600">
                    Maximum
                </p>

                <p class="text-2xl font-bold text-indigo-700">
                    <?php echo $maximum; ?>
                </p>

            </div>


            <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-5">

                <p class="text-sm text-yellow-600">
                    First Diagonal
                </p>

                <p class="text-2xl font-bold text-yellow-700">
                    <?php echo $firstDiagonal; ?>
                </p>

            </div>


            <div class="bg-orange-50 border border-orange-200 rounded-xl p-5">

                <p class="text-sm text-orange-600">
                    Second Diagonal
                </p>

                <p class="text-2xl font-bold text-orange-700">
                    <?php echo $secondDiagonal; ?>
                </p>

            </div>

        </div>


        <!-- Row totals -->

        <div class="mt-8">

            <h3 class="font-semibold text-gray-700 mb-3">
                Total of Each Row
            </h3>


            <div class="grid sm:grid-cols-3 gap-4">

                <?php

                for ($i = 0; $i < 3; $i++) {

                    $rowTotal = 0;

                    for ($j = 0; $j < 3; $j++) {

                        $rowTotal = $rowTotal + $matrix[$i][$j];
                    }

                    echo "
                    <div class='bg-slate-50 border rounded-xl p-4'>
                        <p class='text-gray-500 text-sm'>
                            Row " . ($i + 1) . "
                        </p>

                        <p class='text-xl font-bold'>
                            $rowTotal
                        </p>
                    </div>";
                }

                ?>

            </div>

        </div>


        <!-- Column totals -->

        <div class="mt-8">

            <h3 class="font-semibold text-gray-700 mb-3">
                Total of Each Column
            </h3>


            <div class="grid sm:grid-cols-3 gap-4">

                <?php

                for ($j = 0; $j < 3; $j++) {

                    $columnTotal = 0;

                    for ($i = 0; $i < 3; $i++) {

                        $columnTotal = $columnTotal + $matrix[$i][$j];
                    }

                    echo "
                    <div class='bg-slate-50 border rounded-xl p-4'>

                        <p class='text-gray-500 text-sm'>
                            Column " . ($j + 1) . "
                        </p>

                        <p class='text-xl font-bold'>
                            $columnTotal
                        </p>

                    </div>";
                }

                ?>

            </div>

        </div>


        <!-- Minimum and Maximum positions -->

        <div class="grid md:grid-cols-2 gap-4 mt-8">

            <div class="bg-red-50 border border-red-200 rounded-xl p-5">

                <h3 class="font-semibold text-red-700 mb-3">
                    Minimum Positions
                </h3>

                <?php

                for ($i = 0; $i < 3; $i++) {

                    for ($j = 0; $j < 3; $j++) {

                        if ($matrix[$i][$j] == $minimum) {

                            echo "
                            <span class='inline-block bg-red-100 text-red-700 px-3 py-1 rounded-lg mr-2'>
                                ($i,$j)
                            </span>";
                        }
                    }
                }

                ?>

            </div>


            <div class="bg-blue-50 border border-blue-200 rounded-xl p-5">

                <h3 class="font-semibold text-blue-700 mb-3">
                    Maximum Positions
                </h3>

                <?php

                for ($i = 0; $i < 3; $i++) {

                    for ($j = 0; $j < 3; $j++) {

                        if ($matrix[$i][$j] == $maximum) {

                            echo "
                            <span class='inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-lg mr-2'>
                                ($i,$j)
                            </span>";
                        }
                    }
                }

                ?>

            </div>

        </div>

    </div>



    <!-- ===================================================== -->
    <!-- QUESTION 4 -->
    <!-- ===================================================== -->

    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">

        <div class="border-b pb-4 mb-6">

            <h2 class="text-2xl font-bold text-blue-600">
                Question 4
            </h2>

            <p class="text-gray-500 mt-1">
                Student Information
            </p>

        </div>


        <?php

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

        ?>


        <div class="overflow-x-auto">

            <table class="w-full border-collapse">

                <thead>

                <tr class="bg-blue-600 text-white">

                    <th class="px-5 py-3 text-left">
                        ID
                    </th>

                    <th class="px-5 py-3 text-left">
                        Name
                    </th>

                    <th class="px-5 py-3 text-left">
                        Phone
                    </th>

                    <th class="px-5 py-3 text-left">
                        Address
                    </th>

                </tr>

                </thead>


                <tbody>

                <?php

                foreach ($students as $student) {

                    echo "<tr class='border-b hover:bg-blue-50 transition'>";

                    echo "<td class='px-5 py-4 font-semibold text-blue-600'>
                            {$student["ID"]}
                          </td>";

                    echo "<td class='px-5 py-4'>
                            {$student["Name"]}
                          </td>";

                    echo "<td class='px-5 py-4'>
                            {$student["Phone"]}
                          </td>";

                    echo "<td class='px-5 py-4 text-gray-600'>
                            {$student["Address"]}
                          </td>";

                    echo "</tr>";
                }

                ?>

                </tbody>

            </table>

        </div>

    </div>



    <!-- ===================================================== -->
    <!-- QUESTION 5 -->
    <!-- ===================================================== -->

    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">

        <div class="border-b pb-4 mb-6">

            <h2 class="text-2xl font-bold text-blue-600">
                Question 5
            </h2>

            <p class="text-gray-500 mt-1">
                Student Transcript
            </p>

        </div>


        <?php

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

        ?>


        <div class="overflow-x-auto">

            <table class="w-full border-collapse text-sm">

                <thead>

                <tr class="bg-blue-600 text-white">

                    <th class="px-4 py-4 text-left">
                        Semester
                    </th>

                    <th class="px-4 py-4 text-left">
                        Course
                    </th>

                    <th class="px-4 py-4 text-center">
                        CW1
                    </th>

                    <th class="px-4 py-4 text-center">
                        MidTerm
                    </th>

                    <th class="px-4 py-4 text-center">
                        CW2
                    </th>

                    <th class="px-4 py-4 text-center">
                        Final
                    </th>

                    <th class="px-4 py-4 text-center">
                        Total
                    </th>

                    <th class="px-4 py-4 text-center">
                        Status
                    </th>

                </tr>

                </thead>


                <tbody>

                <?php

                foreach ($transcript as $semester => $subjects) {

                    $firstRow = true;

                    foreach ($subjects as $course => $marks) {

                        echo "<tr class='border-b hover:bg-slate-50 transition'>";


                        // Semester column
                        // Merge the three rows

                        if ($firstRow == true) {

                            echo "
                            <td rowspan='3'
                                class='px-4 py-4 font-bold text-blue-700 bg-blue-50 align-middle'>
                                $semester
                            </td>";

                            $firstRow = false;
                        }


                        echo "
                        <td class='px-4 py-4 font-medium'>
                            $course
                        </td>

                        <td class='px-4 py-4 text-center'>
                            {$marks["CW1"]}
                        </td>

                        <td class='px-4 py-4 text-center'>
                            {$marks["MidTerm"]}
                        </td>

                        <td class='px-4 py-4 text-center'>
                            {$marks["CW2"]}
                        </td>

                        <td class='px-4 py-4 text-center'>
                            {$marks["Final"]}
                        </td>

                        <td class='px-4 py-4 text-center font-bold'>
                            {$marks["Total"]}
                        </td>";


                        // Status

                        if ($marks["Status"] == "Pass") {

                            echo "
                            <td class='px-4 py-4 text-center'>
                                <span class='px-3 py-1 rounded-full bg-green-100 text-green-700 font-semibold'>
                                    Pass
                                </span>
                            </td>";

                        } else {

                            echo "
                            <td class='px-4 py-4 text-center'>
                                <span class='px-3 py-1 rounded-full bg-red-100 text-red-700 font-semibold'>
                                    Fail
                                </span>
                            </td>";
                        }


                        echo "</tr>";
                    }
                }

                ?>

                </tbody>

            </table>

        </div>

    </div>





</div>

</body>
</html>
```
