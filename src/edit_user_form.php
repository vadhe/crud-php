<?php
// Include the database connection file
require_once 'db_connection.php';

// Get the user ID from the URL parameter
$id = $_GET['id'] ?? null;

// Fetch user information from the database
try {
    $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: Could not fetch user information. " . $e->getMessage());
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="edit_user_script.php">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
        <input type="submit" value="Save Changes">
    </form>
</body>
</html> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add User Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"], .form-group input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .form-group input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Edit User</h2>
    <form method="post" action="edit_user_script.php">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>"><br><br>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>

        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add User Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 5rem;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"], .form-group input[type="email"] {
        width: 100%;
        padding: 10px 0;
        padding-left: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .form-group input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Edit Pengguna</h2>
    <form method="post" action="edit_user_script.php">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>"><br><br>

        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>

        </div>
        <div class="form-group">
            <input type="submit" value="Simpan">
        </div>
    </form>
</div>

</body>
</html>

