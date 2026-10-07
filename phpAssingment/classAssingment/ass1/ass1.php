```php
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Transcript</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-100 min-h-screen p-5">

<?php

$countries = array(
    array("Somalia", "Mogadishu"),
    array("Kenya", "Nairobi"),
    array("Ethiopia", "Addis Ababa"),
    array("Uganda", "Kampala"),
    array("Tanzania", "Dodoma")
);

function getCapital($countryName)
{
    global $countries;

    foreach ($countries as $country) {

        if ($country[0] == $countryName) {
            return $country[1];
        }

    }

    return "Country not found";
}

$numbers = array(10, 20, 30, 40, 50);

function getSum($numbers)
{
    $sum = 0;

    foreach ($numbers as $number) {
        $sum = $sum + $number;
    }

    return $sum;
}

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

<div class="max-w-6xl mx-auto">

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-6 text-white">

            <h1 class="text-3xl font-bold">
                Student Transcript
            </h1>

            <p class="text-blue-100 mt-1">
                Academic performance by semester
            </p>

        </div>

        <div class="p-6">

            <h2 class="text-2xl font-bold text-slate-800 mb-4">
                Countries and Capitals
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">

                <?php foreach ($countries as $country) { ?>

                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">

                        <p class="font-bold text-blue-700">
                            Country: <?= $country[0] ?>
                        </p>

                        <p class="text-slate-600">
                            Capital: <?= getCapital($country[0]) ?>
                        </p>

                    </div>

                <?php } ?>

            </div>


            <h2 class="text-2xl font-bold text-slate-800 mb-4">
                Numbers and Sum
            </h2>

            <div class="bg-slate-50 rounded-lg p-5 mb-8">

                <div class="flex gap-3 flex-wrap">

                    <?php foreach ($numbers as $number) { ?>

                        <span class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                            <?= $number ?>
                        </span>

                    <?php } ?>

                </div>

                <p class="text-xl font-bold text-green-600 mt-5">
                    Sum = <?= getSum($numbers) ?>
                </p>

            </div>


            <h2 class="text-2xl font-bold text-slate-800 mb-4">
                Academic Transcript
            </h2>


            <!-- ================================================= -->
            <!-- TRANSCRIPT TABLE - DESIGN CHANGED ONLY -->
            <!-- ================================================= -->

            <div class="overflow-x-auto rounded-xl border border-slate-200 shadow-sm">

                <table class="w-full border-collapse text-sm">

                    <thead>

                        <tr class="bg-slate-800 text-white">

                            <th class="px-5 py-4 text-left font-semibold">
                                Semester
                            </th>

                            <th class="px-5 py-4 text-left font-semibold">
                                Course
                            </th>

                            <th class="px-5 py-4 text-center font-semibold">
                                CW1
                            </th>

                            <th class="px-5 py-4 text-center font-semibold">
                                MidTerm
                            </th>

                            <th class="px-5 py-4 text-center font-semibold">
                                CW2
                            </th>

                            <th class="px-5 py-4 text-center font-semibold">
                                Final
                            </th>

                            <th class="px-5 py-4 text-center font-semibold">
                                Total
                            </th>

                            <th class="px-5 py-4 text-center font-semibold">
                                Status
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                    <?php

                    foreach ($transcript as $semester => $subjects) {

                        $firstRow = true;

                        foreach ($subjects as $course => $marks) {

                            $total = $marks["Total"];

                            if ($total < 50) {

                                $totalClass = "bg-red-100 text-red-700 border border-red-200";
                                $statusClass = "bg-red-100 text-red-700 border border-red-200";
                                $rowClass = "bg-red-50";

                            } elseif ($total < 60) {

                                $totalClass = "bg-yellow-100 text-yellow-700 border border-yellow-200";
                                $statusClass = "bg-yellow-100 text-yellow-700 border border-yellow-200";
                                $rowClass = "bg-yellow-50";

                            } elseif ($total < 70) {

                                $totalClass = "bg-blue-100 text-blue-700 border border-blue-200";
                                $statusClass = "bg-blue-100 text-blue-700 border border-blue-200";
                                $rowClass = "bg-white";

                            } elseif ($total < 80) {

                                $totalClass = "bg-green-100 text-green-700 border border-green-200";
                                $statusClass = "bg-green-100 text-green-700 border border-green-200";
                                $rowClass = "bg-white";

                            } else {

                                $totalClass = "bg-emerald-100 text-emerald-700 border border-emerald-200";
                                $statusClass = "bg-emerald-100 text-emerald-700 border border-emerald-200";
                                $rowClass = "bg-white";

                            }

                    ?>

                        <tr class="<?= $rowClass ?> border-b border-slate-200">

                            <?php if ($firstRow) { ?>

                                <td
                                    rowspan="<?= count($subjects) ?>"
                                    class="px-5 py-5 font-bold text-indigo-700 bg-indigo-50 border-r border-slate-200 align-middle"
                                >
                                    <?= $semester ?>
                                </td>

                            <?php

                                $firstRow = false;

                            }

                            ?>


                            <td class="px-5 py-5 font-medium text-slate-700">

                                <?= $course ?>

                            </td>


                            <td class="px-5 py-5 text-center text-slate-600">

                                <?= $marks["CW1"] ?>

                            </td>


                            <td class="px-5 py-5 text-center text-slate-600">

                                <?= $marks["MidTerm"] ?>

                            </td>


                            <td class="px-5 py-5 text-center text-slate-600">

                                <?= $marks["CW2"] ?>

                            </td>


                            <td class="px-5 py-5 text-center text-slate-600">

                                <?= $marks["Final"] ?>

                            </td>


                            <td class="px-5 py-5 text-center">

                                <span class="inline-block min-w-[55px] px-3 py-2 rounded-lg font-bold <?= $totalClass ?>">

                                    <?= $total ?>

                                </span>

                            </td>


                            <td class="px-5 py-5 text-center">

                                <span class="inline-block px-4 py-2 rounded-full font-bold <?= $statusClass ?>">

                                    <?= $marks["Status"] ?>

                                </span>

                            </td>

                        </tr>


                    <?php

                        }

                    }

                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>

</html>
```
