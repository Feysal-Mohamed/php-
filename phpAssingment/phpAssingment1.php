<?php
// Assignment 1 - PHP

// 1. Greatest and Smallest of Three Numbers
echo "Task 1: Greatest and Smallest<br>";
$a = 10; $b = 25; $c = 15;
$greatest = $a;
if ($b > $greatest) $greatest = $b;
if ($c > $greatest) $greatest = $c;
$smallest = $a;
if ($b < $smallest) $smallest = $b;
if ($c < $smallest) $smallest = $c;
echo "Greatest: $greatest, Smallest: $smallest<br><br>";

// 2. Divisible by 3, 5, Both, or None
echo "Task 2: Divisible by 3 or 5<br>";
$num = 15;
if ($num % 3 == 0 && $num % 5 == 0) echo "$num divisible by both<br>";
elseif ($num % 3 == 0) echo "$num divisible by 3<br>";
elseif ($num % 5 == 0) echo "$num divisible by 5<br>";
else echo "$num not divisible by 3 or 5<br><br>";

// 3. Odd numbers (2–20) and Even numbers (35–7)
echo "Task 3: Odd and Even<br>";
echo "Odd numbers (2–20): ";
for ($i = 2; $i <= 20; $i++) if ($i % 2 != 0) echo $i . " ";
echo "<br>Even numbers (35–7): ";
for ($i = 35; $i >= 7; $i--) if ($i % 2 == 0) echo $i . " ";
echo "<br><br>";

// 4. Numbers divisible by 2 and 5 (50–2)
echo "Task 4: Divisible by 2 and 5<br>";
for ($i = 50; $i >= 2; $i--) if ($i % 2 == 0 && $i % 5 == 0) echo $i . " ";
echo "<br><br>";

// 5. Reverse a Number
echo "Task 5: Reverse Number<br>";
$num = 12345; $reverse = 0;
while ($num > 0) {
    $digit = $num % 10;
    $reverse = $reverse * 10 + $digit;
    $num = (int)($num / 10);
}
echo "Reversed: $reverse<br><br>";

// 6. Lowest Common Multiplier (LCM)
echo "Task 6: LCM<br>";
$a = 8; $b = 12; $max = ($a > $b) ? $a : $b;
while (true) {
    if ($max % $a == 0 && $max % $b == 0) { echo "LCM: $max<br><br>"; break; }
    $max++;
}

// 7. Highest Common Factor (HCF)
echo "Task 7: HCF<br>";
$a = 18; $b = 24; $hcf = 1;
for ($i = 1; $i <= min($a, $b); $i++) if ($a % $i == 0 && $b % $i == 0) $hcf = $i;
echo "HCF: $hcf<br><br>";

// 8. Multiplication Table (12×12)
echo "Task 8: Multiplication Table<br>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Header row
echo "<tr><th>*</th>";
for ($j = 1; $j <= 12; $j++) {
    echo "<th>$j</th>";
}
echo "</tr>";

// Table body
for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    echo "<th>$i</th>"; // row header
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table><br>";


// 9. Prime or Non‑Prime
echo "Task 9: Prime Check<br>";
$num = 29; $isPrime = true;
if ($num <= 1) $isPrime = false;
else for ($i = 2; $i <= sqrt($num); $i++) if ($num % $i == 0) { $isPrime = false; break; }
echo $num . ($isPrime ? " is Prime<br><br>" : " is Not Prime<br><br>");

// 10. Prime Numbers (10–50)
echo "Task 10: Prime Numbers (10–50)<br>";
for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;
    if ($num <= 1) $isPrime = false;
    else for ($i = 2; $i <= sqrt($num); $i++) if ($num % $i == 0) { $isPrime = false; break; }
    if ($isPrime) echo $num . " ";
}
echo "<br>";
?>
