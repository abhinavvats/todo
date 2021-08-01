<?php 
include './db.php';


$id = $_GET['id'];
// echo $id;

$sql="DELETE FROM `vendor` WHERE `vendor`.`id` = $id";
$result=mysqli_query($conn,$sql);
// var_dump($sql);
//   exit();
header("location:index.php");

?>