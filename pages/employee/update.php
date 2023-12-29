<?php
require('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && !empty($_POST['id'])) {

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $birthday = $_POST['birthday'];
    $start_date = $_POST['start_date'];  
    $end_date = $_POST['end_date'];

    $sql = "UPDATE `users_info` SET `fname`=?, `lname`=?, `email`=?, `address`=?, `phone`=?, `salary`=?, `birthday`=?, `start_date`=?, `end_date`=? WHERE `id`=?";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$fname, $lname, $email, $address, $phone, $salary, $birthday, $start_date, $end_date, $id])) {
        header('Location: index.php');
        exit; // Ensure script stops after redirect
    } else {
        echo "Error updating record.";
        // Consider handling errors more gracefully, logging, or providing more specific error messages.
        header('Location: error.php');
        exit; // Ensure script stops after redirect
    }
} else {
    header('Location: error.php');
    exit; // Ensure script stops after redirect
}
?>
