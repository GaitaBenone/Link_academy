<?php

$arr = array(
            array(1, "Peter", "Andersen", "peter@gmail.com"),
            array(2, "John", "Miller", "john@gmail.com"),
            array(3, "Thomas", "Swift", "thomas@gmail.com")
);

for($i = 0; $i <sizeof($arr); $i++) {
    for($u = 0; $u < sizeof($arr[$i]); $u++) {
        echo $arr[$i][$u]." ";
    }
    echo "<br>";
}

 ?>
