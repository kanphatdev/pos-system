<?php
require_once('../db.php');

if (
    isset($_POST['fname']) &&
    isset($_POST['lname']) &&
    isset($_POST['type']) &&
    isset($_POST['sex']) &&
    isset($_POST['phone']) &&
    isset($_POST['point']) &&
    isset($_POST['address'])
) {
    // Create a new customer
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $type = $_POST['type'];
    $sex = $_POST['sex'];
    $phone = $_POST['phone'];
    $point = $_POST['point'];
    $address = $_POST['address'];

    $sql = "INSERT INTO member (fname, lname, phone, type, points, address, sex) 
            VALUES (:fname, :lname, :phone, :type, :points, :address, :sex)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
    $stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);
    $stmt->bindParam(':points', $point, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':sex', $sex, PDO::PARAM_STR);

    $result = $stmt->execute();

    if ($result) {
        echo "Successfully executed";
    } else {
        echo "Failed to execute";
    }
} else {
    // Update members
    if (isset($_POST['id'])) {
        $data = [
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'phone' => $_POST['phone'],
            'type' => $_POST['type'],
            'points' => $_POST['points'],
            'address' => $_POST['address'],
            'sex' => $_POST['sex'],
            'id' => $_POST['id'],
        ];

        $sql = 'UPDATE `member` SET `fname`=:fname,`lname`=:lname,`phone`=:phone,`type`=:type,`points`=:points,`sex`=:sex,`address`=:address WHERE id =:id';
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);

        if ($result) {
            echo "Successfully updated";
        } else {
            echo "Failed to update";
        }
    }
}
?>
