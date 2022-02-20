<?php
$host = "localhost";
$user = "root";
$pass = "password";
$db_name ="qrcode";

$conn = new mysqli($host, $user, $pass, $db_name);

if($conn->connect_error){
    die('database connection error: '. $conn->connect_error);
}
// else{
//     echo"Database Connection is Successful";
// }