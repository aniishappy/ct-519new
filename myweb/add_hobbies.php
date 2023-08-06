
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

// ตรวจสอบว่ามีการส่งข้อมูลมาจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sequence = $_POST["sequence"];
    $name = $_POST["name"];
    $description = $_POST["description"];

    // อัพโหลดรูปภาพ
    $target_dir = "img/"; // โฟลเดอร์เก็บรูปภาพที่อัพโหลด
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
        echo "อนุญาติให้อัพโหลดเฉพาะไฟล์รูปภาพเท่านั้น (jpg, jpeg, png, gif)";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "ไม่สามารถอัพโหลดรูปภาพได้";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // เมื่ออัพโหลดรูปภาพสำเร็จให้เพิ่มข้อมูลลงในฐานข้อมูล
            $sql = "INSERT INTO hobbies_list (sequence, image, name, description) VALUES ('$sequence', '$target_file', '$name', '$description')";

            if ($conn->query($sql) === TRUE) {
                echo "บันทึกข้อมูลเรียบร้อยแล้ว";
                // ใช้ฟังก์ชัน header() เพื่อกลับไปยังหน้า hobbies.php
                header("Location: hobbies.php");
                exit; // ต้องใส่ exit เพื่อหยุดการทำงานของสคริปต์ทันทีหลังจากใช้ header()
            } else {
                echo "การบันทึกข้อมูลล้มเหลว: " . $conn->error;
            }
        } else {
            echo "มีข้อผิดพลาดในการอัพโหลดรูปภาพ";
        }
    }
}

$conn->close();
?>
