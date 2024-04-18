<?php 
include '../connect.php';

$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM categories WHERE id = $id");
$row = mysqli_fetch_assoc($result);
 ?>