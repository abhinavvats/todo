<?php
include'./db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./dataTable.css">
    <script src="./jquery-2.2.4.min.js"></script>
    <script src="./dataTable.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div id="content">
            <div class="container">
                
                   <a class="btn-btn-primary" href="create.php"> <button class="btn btn-primary" style="margin: 6px 0;"> ADD WORK+</button></a> 
                
                <!-- Modal -->

                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">S.NO</th>
                            <th scope="col">Name</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Task</th>
                            <th scope="col">Action</th>
                            <!-- <th colspan="2" style="text-align: center!important;">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
$sql =  "SELECT * FROM `vendor` ";

$result = mysqli_query($conn,$sql);
// var_dump($result);
// exit();
$number=1;
while($row=mysqli_fetch_assoc($result)){
    // var_dump($row);

    // exit();
$id=$row['id'];
$name=$row['name'];
$phone=$row['phone'];
$location=$row['location'];
$history=$row['history'];
// echo $name,$email,$id;

    echo '
    <tr>
    <td>'.$number.'</td>
    <td>'.$name.'</td>
    <td>'.$phone.'</td>
    <td>'.$location.'</td>
    <td>'.$history.'</td>
    <td><a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</a></td>
    
    
  </tr>';
  $number++;
}
    
?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>






    <!-- 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>