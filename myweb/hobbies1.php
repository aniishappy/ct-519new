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

// ดึงข้อมูลทั้งหมดจากตาราง hobbies_list
$sql = "SELECT * FROM hobbies_list ORDER BY sequence DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rowCount = 0;
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        if ($rowCount % 4 == 0) {
            echo "<tr>";
        }
        echo "<td>";
        echo "<div style='display: flex; flex-direction: column; align-items: center;'>"; // ใช้ CSS Flexbox เพื่อจัดกลางข้อความ
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p>NO: " . $row["sequence"] . "</p>";
        echo "<p>Description: " . $row["description"] . "</p>";
        
        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "' width='400'>";
        // แสดงปุ่ม EDIT และ DELETE และเชื่อมลิงก์ไปยังหน้าที่จะให้ใช้งาน
        
        
        
        echo "<div style='display: flex; justify-content: center;'>"; // ใช้ CSS Flexbox เพื่อจัดกลางตามแนวนอน
        echo "<a href='edit_hobbies.php?id=" . $row["sequence"] . "'>EDIT</a> | ";
        echo "<a href='delete_hobbies.php?id=" . $row["sequence"] . "'>DELETE</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</td>";
        $rowCount++;
        if ($rowCount % 4 == 0) {
            echo "</tr>";
        }
        if ($rowCount == 12) { // แสดงเฉพาะ 3 แถว (3 แถว * 4 ช่อง = 12 ช่อง)
            break;
        }
    }
    echo "</table>";
} else {
    echo "ไม่พบข้อมูลในฐานข้อมูล";
}

$conn->close();
?>
