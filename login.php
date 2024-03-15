<?php
    session_start();
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <title>Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="favicon.png" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="./css/login.css" />
  </head>
  <body>
    <div class="logWrapper">
      <form action="./includes/login.inc.php" method="post">
        <h1>SHELTER</h1>
        <div class="input-box">
          <input type="text" placeholder="Username or email" name="username" id="email" class="DataEnrty" required/>
          <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
          <input
            type="password"
            placeholder="password"
            name="pwd"
            id="DataEnrty"
            required
          />
          <i class="bx bx-key"></i>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>Don't have an account? <a href="./SignUp.php">register</a></p>
        </div>
      </form>
    </div>
  </body>
</html>
