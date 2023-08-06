<?php
// Assuming you have a database connection established
include('connection.php');

// Fetch data from the database
$query = "SELECT * FROM list"; // Modify this query according to your database structure
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHobbies</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
    <?php 
        include('navbar.php');
    ?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <!-- <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form> -->
    </div>

    <div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
      <h2>Hobbies List</h2>
      <form method="post" action="add_hobbies.php">
        <button class="btn btn-success" >Add Hobbies</button>
      </form>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Picture</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php // Check if data was fetched successfully
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>        
        <tr>
          <th scope="row"><?php echo $row['id'] ?></th>
          <td><img src="<?php echo $row['image'] ?>" alt="Image" width="200" height="200" ></td>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['description'] ?></td>
          <td>
            <a href="edit_hobbies.php?id=<?php echo $row['id']?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="delete_hobbies.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
       <?php
        }
      }
       ?>
        <!-- Add more rows for additional products -->
      </tbody>
    </table>

    <?php 
        include('footer.php');
    ?>
  
</body>
<script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</html>