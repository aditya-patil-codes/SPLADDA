<?php

$con = mysqli_connect("localhost", "root", "", "ca");
// $mysqli -> new mysqli(host, username, password, dbname, port, socket)
// $con=mysqli_connect("localhost","root","","college");

if (mysqli_connect_error()) {
    echo "<script>alert('cannot connect to the database');</script>";
    exit();
}
