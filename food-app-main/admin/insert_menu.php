<?php
include '../connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Form data
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    // File upload handling
    if (isset($_FILES['img'])) {
        $error = array();
        $filename = $_FILES['img']['name'];
        $filesize = $_FILES['img']['size'];
        $filetype = $_FILES['img']['type'];
        $filetmp = $_FILES['img']['tmp_name'];

        $file_ex = explode("/", $filetype);
        $file_extension = strtolower(end($file_ex));

        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        if (!in_array($file_extension, $allowed_extensions)) {
            echo "Wrong file type!<br>";
            $error[] = "Wrong file type!";
        } elseif ($filesize > 2097152) {
            echo "Large file!<br>";
            $error[] = "File larger than 2 Megabyte!";
        } elseif (empty($error)) {
            $destination = "./assets/uploads/" . $filename;
            if (move_uploaded_file($filetmp, $destination)) {
                echo "Image Uploaded!<br>";

                // Insert data into the database
                $sql = "INSERT INTO menus (name, category, price, quantity, description, image)
                        VALUES ('$name', '$category', '$price', '$quantity', '$description', '$filename')";

                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                    header('Location: view_product.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error uploading file!<br>";
            }
        }
    }
}
