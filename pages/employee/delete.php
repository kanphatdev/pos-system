<?php
require('db.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM users_info WHERE id = ?";
        $stmt = $conn->prepare($sql);
        
        // Bind the parameter to avoid SQL injection
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        
        // Execute the query
        if ($stmt->execute()) {
            header('Location: index.php');
            exit; /// Ensure script stops after redirect
        } else {
            echo "Error executing query.";
        }
    } catch (PDOException $e) {
        // Handle PDO exceptions (errors)
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "UserID is missing or empty.";
}
?>
