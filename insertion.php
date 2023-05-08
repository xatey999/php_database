<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lgic";
//create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
//check connection
if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
}
$sql = "INSERT INTO tb_newtable(firstname,lastname,email)
VALUES('Ujjwal', 'Adhikari', 'ujjwal999adhikari@gmail.com')";
if(mysqli_query($conn,$sql)){
    $last_id = mysqli_insert_id($conn);
    echo "new record created sucessfully".$last_id;

}else{
    echo "Error : ".$sql,"<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>