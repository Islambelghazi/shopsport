<?php
include('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['Address'];
    $phone = $_POST['phone'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];

    // إعداد استعلام لإدخال البيانات
    $sql = "INSERT INTO orders (name, email, address, phone, product_name, price) 
            VALUES ('$name', '$email', '$address', '$phone', '$product_name', '$price')";

    // تنفيذ الاستعلام
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Your request has been successfully added!";
    } else {
        $_SESSION['message'] = "false: " . $sql . "<br>" . $conn->error;
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;

}
?>
