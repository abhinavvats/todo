<?php
include './db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name1 = $_POST['name'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $history = $_POST['history'];
    // echo $name1 ,$phone ,$location ,$history;
    // die();
  
//   $sql = "INSERT INTO `vendor` (`name`, `location`, `phone` , `history`) VALUES ('$name1', '$location', '$phone' , '$history')";
  $sql = "INSERT INTO `vendor` (`name`, `location`, `phone`, `history`) VALUES ('$name1', '$location', '$phone', '$history')";
//   var_dump($sql);
//   exit();
  $result = mysqli_query($conn, $sql);
  

    header("location:./index.php");
}
?>
<div class="container">
    <h1 class="text-center text-dark">Add Vendor</h1>
    <form method="POST" action="./create.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Task</label>
            <input type="text" class="form-control" name="location" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Priority</label>
            <input type="phone" class="form-control" name="phone" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Action</label>
            <input type="text" class="form-control" name="history" required aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>