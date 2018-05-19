<?php
$servername = "localhost";
$username = "root";
$password = "Benone10";
$db = "first_php_test_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully! <br><br>";


// comment after one useand change name of the db:

// // create db
// mysqli_query($conn,"CREATE DATABASE first_php_test_db");
// // select db
// mysqli_select_db($conn,"first_php_test_db");
// // create table
// mysqli_query($conn,"CREATE TABLE mytable (id int primary key auto_increment, username varchar(50))");
// // insert valuesinto table
// mysqli_query($conn,"INSERT INTO mytable values(null,'Peter'),(null,'Sally'),(null,'John')");
// // close connection
// mysqli_close($conn);

$result = mysqli_query($conn, "SELECT * FROM mytable");

var_dump($result);
echo "<br>";
echo "<br>";

while($rw=mysqli_fetch_row($result))
    echo "ID: " . $rw[0] . " - Name: " . $rw[1] . "<br />";






?>
