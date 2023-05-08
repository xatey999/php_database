<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lgic";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tb_newtable(firstname, lastname, email) VALUES ('$fname', '$lname', '$email')";
$result = $conn->query($sql);

$conn->close();
?>