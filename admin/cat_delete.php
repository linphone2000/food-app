<?php
    include '../connect.php';
    $id = $_GET['id'];
    mysqli_query($conn,"DELETE FROM categories WHERE id = $id ");
    header("location:add_category_form.php");
?>