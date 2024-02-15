<?php
// Include the database connection file
require_once 'db_connection.php';

// Check if the user ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the user from the database
    try {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
        // Redirect to index page after successful deletion
        header("Location: index.php");
        exit; // Stop further execution of the current script
    } catch (PDOException $e) {
        die("Error: Could not delete user. " . $e->getMessage());
    }
} else {
    // Redirect to index page if user ID is not provided or empty
    header("Location: index.php");
    exit; // Stop further execution of the current script
}
?>
