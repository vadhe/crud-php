<?php
require_once 'db_connection.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);

    // Prepare and execute the query to insert data into the users table
    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, email) VALUES (?, ?)");
        $stmt->execute([$username, $email]);
        // Redirect to another page after successful insertion
        header("Location: index.php");
        exit; // Stop further execution of the current script
    } catch (PDOException $e) {
        die("Error: Could not insert record. " . $e->getMessage());
    }
    
}
?>