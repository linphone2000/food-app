<?php
include '../connect.php';

$sql = "SELECT * FROM menus";
$result = $conn->query($sql);

$foodProducts = array();
$conn_name = $conn;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $foodProducts[] = $row;
    }
}
