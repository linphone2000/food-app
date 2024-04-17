<?php 
include '../connect.php';

$id = $_POST['id'];
$name= $_POST['catname'];
$sql = "UPDATE categories SET name = '$name',modified_date=now() WHERE id=$id";
mysqli_query($conn,$sql);
header("location:add_category_form.php");
 ?>