<?php 
include '../connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];

	$sql="INSERT INTO categories (name,created_date,modified_date)
		VALUES ('$name',now(),now())";

	if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: view_category.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 ?>