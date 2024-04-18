<?php 
include '../connect.php';

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

$categories = array();

if($result->num_rows > 0 )
{
    while($row = $result->fetch_assoc())
    {
        $categories[] = $row;
    }
}
 ?>