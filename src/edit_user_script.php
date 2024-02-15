<?php
// Include the database connection file
require_once 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $id = $_POST['id'];
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);

    // Update user information in the database
    try {
        $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        $stmt->execute([$username, $email, $id]);

        // Redirect to index page after successful update
        header("Location: index.php");
        exit; // Stop further execution of the current script
    } catch (PDOException $e) {
        die("Error: Could not update user information. " . $e->getMessage());
    }
}
?>
