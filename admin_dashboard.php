<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit;
}

include 'db.php';

// Fetch all users
$users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - PlanAhead</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <style>
        /* General Styling */
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

    <!-- User Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td class="actions">
                        <a href="edit_user.php?id=<?= $user['id'] ?>" class="edit">Edit</a>
                        <a href="delete_user.php?id=<?= $user['id'] ?>" class="delete">Delete</a>
                        <a href="view_user.php?id=<?= $user['id'] ?>" class="view">View</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
