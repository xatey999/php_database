<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lgic";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email FROM tb_newtable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
?>
    <table border='1px'><tr><td>ID</td>
    <td style=" border : 1px solid red;">Fname</td>
    <td>Lname</td>
    <td>Email</td>
    <?php
    while($row = $result->fetch_assoc()) {
        echo"<tr>";
        echo "<td>" . $row["id"]."</td>". " <td>" . $row
        ["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row
        ["email"]."</td>";
        echo"</tr>";
    }
    ?>
    </table>;
    <?php
} else {
    echo "0 results";
}
$conn->close();
?>