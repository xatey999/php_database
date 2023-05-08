<?php
$servername = "localhost";
$username = "root";
$password = "";
//create connection
$conn = new mysqli($servername, $username, $password);

//check connection
if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}

//Create database
$sql = "CREATE DATABASE lagrandee";
if($conn->query($sql) === TRUE) {
    echo "Database created successfully";
}
else {
    echo "Error creating database:". $conn->error;
}
//to create table
// $sql = "CREATE TABLE tb_lgic (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, email VARCHAR(50), regdate TIMESTAMP)";
// if (mysqli_query($conn, $sql)) {
//     echo "Table tb_lgic created successfully";
//     }
//     else {
//         echo "Error creating table : " . mysqli_error($conn);
//     }
//     mysqli_close($conn);
$conn->close();
?>
