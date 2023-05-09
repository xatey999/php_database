<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lgic";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
    die("Connection failed :" . mysqli_connect_error());
}

$sql = "DELETE FROM tb_newtable WHERE id=3";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>