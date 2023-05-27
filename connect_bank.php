<?php
$servername = "localhost";
$username = "root";
$password = "Ahan7614";
$dbname = "bank";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}// } else {
//     echo "connected";
// }
?>