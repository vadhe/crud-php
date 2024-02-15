<?php
require_once 'db_connection.php';
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}

$stmt = $pdo->query('SELECT * FROM users');
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Management</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
    }
    h2 {
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .add-button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 15px;
    }
    .add-button:hover {
        background-color: #0056b3;
    }
    .logout-button {
        background-color: red;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 15px;
    }
    .logout-button:hover {
        background-color: red;
    }
    form {
        display: flex;
    justify-content: end;
    }
</style>
</head>
<body>

<div class="container">
    <h2>List Pengguna</h2>
    <form action="logout.php" method="post">
    <input class="logout-button" type="submit" value="Logout">
</form>
    <a   href="/add_user_form.php">
        <button class="add-button">Tambah Pengguna</button>
    </a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($records as $user): ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                <a href="edit_user_form.php?id=<?php echo $user['id']; ?>">Edit</a>
                <a href="delete_user.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>

