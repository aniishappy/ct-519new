<?php
// Assuming you have a database connection established
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Insert the new record into the database
    $query = "INSERT INTO list (name, description) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $name, $description);

    if ($stmt->execute()) {
        header("Location: hobbies.php"); // Redirect to the hobbies page
        exit();
    } else {
        echo 'Error creating hobby.';
    }

    // Close the database connection
    $conn->close();
}
?>
?>
