<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Bookly - shop</title>
  </head>
<body>


<div class="profile-container">
  <aside class="profile-sidebar">
    <div class="profile-header">
      <img src="https://via.placeholder.com/100" alt="Profile" class="avatar">
      <h3 class="username">@paolo</h3>
    </div>
    <ul class="profile-nav">
      <li><span class="icon">👤</span> Edit Account</li>
      <li><span class="icon">🔔</span> Notifications</li>
      <li><span class="icon">🔒</span> Privacy</li>
      <li class="active"><span class="icon">📋</span> Orders</li>
      <li><span class="icon">📥</span> Downloads</li>
      <li><span class="icon">📍</span> Billing Address</li>
      <li><span class="icon">🚚</span> Shipping Address</li>
      <li><span class="icon">🚪</span> Logout</li>
    </ul>
  </aside>

  <main class="profile-content">
    <h2 class="section-title">My Orders</h2>
    <table class="orders-table">
      <thead>
        <tr>
          <th>Order</th>
          <th>Date</th>
          <th>Status</th>
          <th>Total</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="order-id">#442</td>
          <td>September 10, 2020</td>
          <td>Completed</td>
          <td>$399.99 for 1 item</td>
          <td><button class="view-btn">View</button></td>
        </tr>
      </tbody>
    </table>
  </main>
</div>



</body>
</html>



























































































































<?php
// session_start();


// if (!isset($_SESSION['user_id'])) {
//     header("Location: index.php"); 
//     exit();
// }

// $conn = new mysqli("localhost", "root", "", "pegasus_db");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $user_id = $_SESSION['user_id'];
// $sql = "SELECT u.user_email, u.user_created, p.* FROM users u 
//         LEFT JOIN user_profiles p ON u.user_id = p.user_id 
//         WHERE u.user_id = '$user_id'";

// $result = $conn->query($sql);
// $user_data = $result->fetch_assoc();
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css"> <style>
        .profile-container { max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; font-family: sans-serif; }
        .profile-header { border-bottom: 2px solid #333; padding-bottom: 10px; margin-bottom: 20px; }
        .info-group { margin-bottom: 15px; }
        .info-group label { font-weight: bold; display: block; color: #555; }
        .info-group span { font-size: 1.1em; }
    </style>
</head>
<body>

    <div class="profile-container">
        <div class="profile-header">
            <h2>User Profile</h2>
        </div>

        <div class="info-group">
            <label>Email Address:</label>
            <span><?php echo htmlspecialchars($user_data['user_email']); ?></span>
        </div>

        <div class="info-group">
            <label>Member Since:</label>
            <span><?php echo date("F j, Y", $user_data['user_created']); ?></span>
        </div>

        <div class="info-group">
            <label>User ID:</label>
            <span>#<?php echo $user_data['user_id']; ?></span>
        </div>

        <hr>
        <a href="index.php">Back to Home</a> | 
        <a href="header.php?logout=1">Logout</a>
    </div>

</body>
</html>  -->