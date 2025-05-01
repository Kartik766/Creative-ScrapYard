<?php
include('C:\xampp\htdocs\E-shop\process\connection.php');

if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    $sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    
    if (mysqli_query($conn, $sql)) {
        echo '<span style="font-size: 55px; color: blue;"> ' . "Thank you for contacting us! We will reach to you soon." . '</span>';
        header("Location: index.php");
        exit();
    } else {
        echo "Unable to Insert Data";
    }
}
?>