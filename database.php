<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lgic";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die ("Connection failed:" . mysqli_connect_error());
}
// sql to create table
$sql = "CREATE TABLE tb_newtable (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, email VARCHAR(50), regdate TIMESTAMP)";
if (mysqli_query($conn, $sql)) {
    echo "Table tb_newtable created successfully";
    }
    else {
        echo "Error creating table : " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>