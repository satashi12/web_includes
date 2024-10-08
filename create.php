<?php
session_start();
include "db.php";

$error_message = '';
$success_message = '';

// Admin credentials (hardcoded for simplicity)
$admin_username = 'admin';
$admin_password = 'password123'; // Change this for production use

// Handle admin login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['admin_login'])) {
    $username = $_POST['admin_username'];
    $password = $_POST['admin_password'];

    if ($username == $admin_username && $password == $admin_password) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $error_message = "Invalid username or password.";
    }
}

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    echo '
    <form action="" method="POST">
        <fieldset>
            <legend>Admin Login:</legend>
            Username:<br>
            <input type="text" name="admin_username" required><br>
            Password:<br>
            <input type="password" name="admin_password" required><br>
            <input type="submit" name="admin_login" value="Login">
        </fieldset>
    </form>';
    exit();
}

// Handle student submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $username = $_POST['student_username'];
    $password = $_POST['student_password'];

    $sql = "INSERT INTO students (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        $success_message = "New record created successfully.";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle student deletion
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM students WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        $success_message = "Record deleted successfully.";
    } else {
        $error_message = "Error deleting record: " . $conn->error;
    }
}

// Retrieve all students
$students = [];
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        fieldset {
            max-width: 400px;
            margin: auto;
            border: 2px solid black;
            border-radius: 10px;
            padding: 20px;
        }
        legend {
            font-weight: bold;
            padding: 0 10px; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center"><b>Admin Dashboard</b></h2>
        <br>
        <?php if ($error_message) { echo '<div class="alert alert-danger">' . htmlspecialchars($error_message) . '</div>'; } ?>
        <?php if ($success_message) { echo '<div class="alert alert-success">' . htmlspecialchars($success_message) . '</div>'; } ?>
        
        <form action="" method="POST">
            <fieldset>
                <legend>Register Student:</legend>
                Username:<br>
                <input type="text" name="student_username" required> <br>
                Password:<br>
                <input type="password" name="student_password" required> <br>
                <br>
                <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </fieldset>
        </form>

        <h3 class="mt-5">Student Records</h3>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo $student['id']; ?></td>
                        <td><?php echo htmlspecialchars($student['username']); ?></td>
                        <td>
                            <a href="?delete=<?php echo $student['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
