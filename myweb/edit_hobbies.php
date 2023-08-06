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

// ตรวจสอบว่ามีค่า sequence ที่ต้องการแก้ไขที่ถูกส่งมาหรือไม่
if (isset($_GET["id"])) {
    $sequence = $_GET["id"];

    // ดึงข้อมูลที่ต้องการแก้ไขจากฐานข้อมูล
    $sql = "SELECT * FROM hobbies_list WHERE sequence = $sequence";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // ตรวจสอบการกดปุ่ม "SAVE" เพื่ออัปเดตข้อมูลใหม่ในฐานข้อมูล
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $description = $_POST["description"];

            // ตรวจสอบว่ามีการอัปโหลดรูปภาพใหม่หรือไม่
            if (isset($_FILES["image"]) && $_FILES["image"]["name"] !== "") {
                $target_dir = "img/"; // โฟลเดอร์เก็บรูปภาพที่อัปโหลด
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // เช็คขนาดของรูปภาพ
                if ($_FILES["image"]["size"] > 500000) {
                    echo "ขนาดรูปภาพใหญ่เกินไป";
                    $uploadOk = 0;
                }

                // อนุญาติให้ upload ไฟล์เฉพาะนามสกุล jpg, jpeg, png, gif
                if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
                    echo "อนุญาติให้อัปโหลดเฉพาะไฟล์รูปภาพเท่านั้น (jpg, jpeg, png, gif)";
                    $uploadOk = 0;
                }

                if ($uploadOk == 0) {
                    echo "ไม่สามารถอัปโหลดรูปภาพได้";
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        // อัปเดตข้อมูลในฐานข้อมูล
                        $sql_update = "UPDATE hobbies_list SET name='$name', description='$description', image='$target_file' WHERE sequence=$sequence";
                        if ($conn->query($sql_update) === TRUE) {
                            echo "อัปเดตข้อมูลเรียบร้อยแล้ว";
                            $row["name"] = $name;
                            $row["description"] = $description;
                            $row["image"] = $target_file;
                        } else {
                            echo "การอัปเดตข้อมูลล้มเหลว: " . $conn->error;
                        }
                    } else {
                        echo "มีข้อผิดพลาดในการอัปโหลดรูปภาพ";
                    }
                }
            } else {
                // อัปเดตข้อมูล (ไม่รวมรูปภาพ) ในฐานข้อมูล
                $sql_update = "UPDATE hobbies_list SET name='$name', description='$description' WHERE sequence=$sequence";
                if ($conn->query($sql_update) === TRUE) {
                    echo "อัปเดตข้อมูลเรียบร้อยแล้ว";
                    $row["name"] = $name;
                    $row["description"] = $description;
                } else {
                    echo "การอัปเดตข้อมูลล้มเหลว: " . $conn->error;
                }
            }
        }

        // แสดงฟอร์มแก้ไขข้อมูล
        echo "<h2>Edit Hobby</h2>";
        echo "<form action='' method='POST' enctype='multipart/form-data'>";
        echo "<input type='hidden' name='sequence' value='" . $row["sequence"] . "'>";
        echo "<label for='name'>HOBBIES NAME:</label>";
        echo "<input type='text' id='name' name='name' value='" . $row["name"] . "' required><br>";
        echo "<label for='description'>DESCRIPTION :</label><br>";
        echo "<textarea id='description' name='description' rows='4' cols='50' required>" . $row["description"] . "</textarea><br>";
        echo "<label for='image'>UPLOAD PICTURE:</label>";
        echo "<input type='file' id='image' name='image'><br>";
        echo "<input type='submit' value='SAVE'>";
        echo "</form>";

        // เพิ่มลิงก์ "BACK" เพื่อกลับไปหน้า hobbies.php
        echo "<a href='hobbies.php'> 'BACK </a>";
    }
}

$conn->close();
?>

