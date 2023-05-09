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

$sql = "UPDATE tb_newtable SET Firstname = 'Naruto' WHERE id=1";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>