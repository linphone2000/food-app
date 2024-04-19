<?php
session_start();
include '../../connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $check_sql = "SELECT * FROM users WHERE email = '$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result && $check_result->num_rows > 0) {
        echo "Email already exists.";
    } else {
        $sql = "INSERT INTO users (email, password, phone, address)
        VALUES ('$email', '$password', '$phone', '$address')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration Success";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo 'Error: Invalid request method.';
}
