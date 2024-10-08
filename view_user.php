<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_dashboard.php');
    exit;
}

include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>PlanAhead Admin</title>
  <style>
    body {
      background-color: #ff9900;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: white;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .button-container {
      text-align: center;
    }

    button {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      margin-right: 5px;
    }

    button.delete {
      background-color: #f44336;
    }

    button.view {
      background-color: #2196F3;
    }

    .header {
      background-color: #ff6600;
      color: white;
      padding: 10px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      margin-left: 20px;
    }

    .nav {
      margin-right: 20px;
    }

    .nav a {
      color: white;
      text-decoration: none;
      margin-right: 15px;
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="logo">PlanAhead Admin</div>
    <div class="nav">
      <a href="admin_dashboard.php">Dashboard</a>
      <a href="user_login.php">Logout</a>
    </div>
  </div>
  <div class="container">
    <h2>Welcome, Admin</h2>
    <h3>User Management</h3>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        include 'db.php';

        $stmt = $pdo->query("SELECT * FROM users");
        while ($row = $stmt->fetch()):
          ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['email'] ?></td>
            
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>