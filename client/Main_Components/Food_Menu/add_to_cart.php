<?php
session_start();
include '../../../connect.php';

if (isset($_POST['id']) && isset($_POST['qty'])) {
    $productId = $_POST['id'];
    $productQty = $_POST['qty'];

    // Add order details to session cart
    $_SESSION['food_cart'][] = array(
        'id' => $productId,
        'qty' => $productQty
    );

} else {
    // Return an error message for invalid request
    http_response_code(400);
    echo 'Error: Invalid request';
}