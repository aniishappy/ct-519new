<?php
$servername = "localhost";
$username = "anianima";
$password = "my2jzy1t";
$dbname = "my_hobbies";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

?>