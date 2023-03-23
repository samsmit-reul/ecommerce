<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
  <div class="login-box">
    <h2>Admin Login</h2>
    <form action="admin_login.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="username" required>
      <label for="password">Password</label>
      <input type="password" name="password" required>
      <input type="submit" name="submit" value="Login">
    </form>
  </div>
</body>
</html>
