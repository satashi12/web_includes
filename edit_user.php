<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit;
}

include 'db.php'; // Your database connection file

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?");
        $stmt->execute([$username, $email, $password, $id]);

        header('Location: admin_dashboard.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #FF7F00; /* Matching the theme */
            color: #FFFFFF;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* Navigation Header */
        header {
            background-color: #FF6200;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
            padding-left: 20px;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
        }

        header nav ul li {
            margin: 0 15px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #FFFFFF;
            font-weight: bold;
            transition: color 0.3s;
        }

        header nav ul li a:hover {
            color: #FFD700; /* Lighter color on hover */
        }

        /* Dashboard Title */
        h2, h3 {
            margin: 20px 0;
        }

        /* Table Styling */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #FFFFFF;
            color: #000000;
            border-radius: 10px;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
        }

        table th {
            background-color: #FF6200;
            color: #FFFFFF;
        }

        table tr:nth-child(even) {
            background-color: #F2F2F2;
        }

        table tr:hover {
            background-color: #FFE4B5; /* Light orange on hover */
        }

        /* Action Buttons */
        .actions a {
            margin: 0 5px;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .actions a.edit {
            background-color: #4CAF50; /* Green */
            color: #FFFFFF;
        }

        .actions a.delete {
            background-color: #F44336; /* Red */
            color: #FFFFFF;
        }

        .actions a.view {
            background-color: #008CBA; /* Blue */
            color: #FFFFFF;
        }

        .actions a:hover {
            opacity: 0.8;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50; /* Green */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
      <!-- Header Section -->
      <header>
        <div class="logo">
            PlanAhead Admin
        </div>
        <nav>
            <ul>
                <li><a href="admin_dashboard.php">Dashboard</a></li>
                
                <li><a href="user_login.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <h2>Welcome, Admin</h2>
    <h3>User Management</h3>
    <div class="container">
        <h2>Edit User</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?= $user['username'] ?>">

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $user['email'] ?>">

            <label for="password">Password:</label>
            <input type="password" name="password" value="<?= $user['password'] ?>">

            <button type="submit" name="submit">Update</button>
            
        </form>
    </div>
</body>
</html>