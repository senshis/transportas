<?php

$servername = "sql105.byethost7.com";
$username = "b7_21635243";
$password = "slaptazodis";
$dbname = "transportas";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Prisijungti nepavyko: " . mysqli_connect_error());


if (mysqli_connect_errno()) {
    printf("Prisijungti nepavyko: %s\n", mysqli_connect_error());
    exit();
}

?>