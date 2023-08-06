<?php
// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "anianima";
$password = "my2jzy1t";
$dbname = "my_hobbies";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// ตรวจสอบว่ามีค่า id (sequence) ที่ต้องการลบที่ถูกส่งมาหรือไม่
if (isset($_GET["id"])) {
    $sequence = $_GET["id"];

    // ลบข้อมูลในฐานข้อมูล
    $sql_delete = "DELETE FROM hobbies_list WHERE sequence=$sequence";
    if ($conn->query($sql_delete) === TRUE) {
        echo "ลบข้อมูลเรียบร้อยแล้ว";
    } else {
        echo "การลบข้อมูลล้มเหลว: " . $conn->error;
    }
}
echo "<a href='hobbies.php'> BACK </a>";
// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
