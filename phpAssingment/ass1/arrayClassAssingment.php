
<?php

$students = array (
    array (201, "Hassan", 22345877857, "hodan"),
    array (202, "Yusuf", 277834574378, "hodan"),
    array (203, "Fatima", 25789347583, "juungle"),
    array (204, "Ali", 31723874893, "mogadishu"),
    array (205, "Maryan", 7892378423728, "somalia")
);


echo "<table border='3' cellpadding='5' cellspacing='0'>";

// Header row
echo "<tr>
<th>ID</th>";
echo <th>Name</th>;
echo <th>phone</th>;
echo <th>adrees</th>;
echo "</tr>";

// Table body
// for ($students as $info) {
//     echo "<tr>";
//     echo "<td>$info[1][0]</td>"; // row header
//     echo "<td>$info[1][1]</td>"; // row header
//     echo "<td>$info[1][2]</td>"; // row header
//     echo "<td>$info[1][3]</td>"; // row header
   
//     echo "</tr>";
// }

echo "</table><br>";?>
