<?php 

$arayStudy = array(
    array("somalia","mogadishu"),
    array("ethopia","adis"),
    array("kenya","nairobi"),
    array("india","hyderbad")
);
foreach ($arayStudy as $list) {

        foreach ($list as $key => $value) {

        if ($key == 0) {
            echo "The country is: <h1>" . $value . "</h1>";
        }

        if ($key == 1) {
            echo "The capital is: <h1>" . $value . "</h1><br>";
        }

    }


}

?>