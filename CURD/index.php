<?php

//include database connection
include"config/db.php";

//query all data
$query = "SELECT * FROM studentinfo.user";

//prepare
$stmt = $conObj->prepare($query);

//execute
$stmt->execute();

//$num = $stmt->rowcount();
//echo $num;



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Students Info Table</h2>
  <div class="container">
    <a href="create.php" class="btn btn-success float-end">Add Student</a>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>

      <?php

        while ($row = $stmt->fetch(PDO :: FETCH_ASSOC)) 
        {
            /*echo"<pre>";
            print_r($row);
            echo"</pre>";*/
            extract($row);
            echo"";

        ?>

      <tr>
        <td><?php echo $fname ?></td>
        <td><?php echo $lname ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $course ?></td>
        <td>
          <button type="button" class="btn btn-info btn-sm">Read</button>
          <button type="button" class="btn btn-warning btn-sm">Edit</button>
          <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </td>
      </tr>
      
      <?php
        }
      ?>

    </tbody>
  </table>
</div>

</body>
</html>
