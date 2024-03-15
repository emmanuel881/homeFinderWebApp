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
    <div class="logWrapper" style="height: 600px;">
      <form action="./includes/signup.inc.php" method="post">
        <h1>SHELTER</h1>
        <div class="input-box">
          <input type="text" placeholder="User name" name="username" id="DataEnrty" required />
          <i class='bx bx-user'></i>
        </div>
        <div class="input-box">
          <input type="email" placeholder="Email" name="email" id="DataEnrty" required />
          <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
          <input
            id="DataEnrty"
            type="password"
            placeholder="password"
            name="pwd"
            required
          />
        <div class="input-box">
            <input
              id="DataEnrty"
              type="password"
              placeholder="re-type password"
              name="retype_password"
              required
            />
          <i class="bx bx-key"></i>
        </div>
        <div class="checkBox">
            <input type="radio" id="" name="userStatus" value="landlord">
            <label for="landlord">landlord</label><br>
            <input type="radio" id="" name="userStatus" value="tenant">
            <label for="tenant">tenant</label><br>
            <br>
            <br> 
        </div>
        <button type="submit" name="submit" class="btn">SignUp</button>
      </form>
      
    </div>
  </body>
</html>
