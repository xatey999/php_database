<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lgic";
//create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE tb_newtable (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, email VARCHAR(50), 
regdate TIMESTAMP)";
if (mysqli_query($conn, $sql)) {
    echo "Table tb_newtable created successfully";
    }
    else {
        echo "Error creating table : " . mysqli_error($conn);
    }

$sql = "SELECT id, firstname, lastname FROM tb_StudentInfo";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<b>id:" . $row["id"]. " - Name: " . $row["firstname"]. "</b> " 
        . $row["lastname"]. "<br>";
    }

} else {
    echo "0 results";
}
mysqli_close($conn);
?>