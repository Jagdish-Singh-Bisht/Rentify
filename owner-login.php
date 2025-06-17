<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Owner Login - Rentify</title>
  <style>
    body { font-family: Arial; background: #f2f2f2; }
    .login-box {
      width: 400px; margin: 80px auto; background: #fff;
      padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 { text-align: center; }
    input { width: 100%; padding: 10px; margin: 10px 0; }
    button { padding: 10px; background: #27ae60; color: white; border: none; }
    p {
      text-align: center;
      margin-top: 15px;
    }
    a {
      color: #27ae60;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Owner Login</h2>
    <form action="owner-authenticate.php" method="POST">
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>

    <!-- 🔗 Register link -->
    <p>Don't have an account? <a href="owner-register.php">Register as Owner</a></p>
  </div>
</body>
</html>









<!-- INSERT INTO owner_users (email, password, name)
VALUES ('owner@example.com', MD5('123456'), 'Ajju Owner'); -->




<!-- to check ::

SELECT * FROM owner_users; -->
