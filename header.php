<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>SHELTER</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="favicon.png" />
    <link rel="stylesheet" href="./css/index.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
  </head>

  <body>
    <div id="preloader"></div>
    <div class="sidebar">
      <div class="top">
        <div class="logo">
          <i class="bx bx-shield"></i>
          <span id="logoT">SHELTER</span>
        </div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <div class="user">
        <div class="profileImg">
          <!--<i class="bx bxs-user-circle"></i>-->
          <img src="./img/userIMG.jpg" alt="img" />
        </div>
        <div>
          <p class="bold">username</p>
          </p>
          <p>user</p>
          
          
        </div>
      </div>
      <ul>
        <li>
          <a href="#">
            <i class="bx bxs-home"></i>
            <span class="nav-item">Home</span>
          </a>
          <span class="tooltip">Home</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="nav-item">Settings</span>
          </a>
          <span class="tooltip">Settings</span>
        </li>
        <li>
          <a href="logout.php">
            <i class="bx bx-log-out"></i>
            <span class="nav-item">Logout</span>
          </a>
          <span class="tooltip">Logout</span>
        </li>
      </ul>
    </div>
    <div class="main-content">
      <div class="top-section">
        <h1>SHELTER</h1>
        <div class="searchBox">
          <input type="text" placeholder="search area Name" />
          <a href="#">
            <i class="bx bx-search-alt"></i>
          </a>
        </div>
      </div>
      <div class="page-content">
        <div class="container">
        <?php
      // Include the content of the desired page
      if (isset($_GET['page'])) {
          $page = $_GET['page'];
          if ($page === 'index') {
              include './index.php';
          } elseif ($page === 'profile') {
              include './profile.php';
          }
          // Add more conditions for other pages as needed
      } else {
          // Default page content if no page is specified
          include 'home.php';
      }
      ?>
        </div>
      </div>
    </div>
  </body>
  <script>
    var btn = document.querySelector("#btn");
    var sidebar = document.querySelector(".sidebar");

    btn.onclick = function () {
      sidebar.classList.toggle("active");
    };
  </script>
  <!-- preloader img script -->
  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
      loader.style.display = "none";
    });
  </script>
</html>
