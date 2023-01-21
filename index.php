<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin Dashboard</title>
    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* .topnav {
  overflow: hidden;
  background-color: #808080;
} */

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-radius: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #808080;
  color: white;
}
</style>
</head>
<body>
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="topnav">
  <a class="active" href="#home">Admin</a>
  <a href="#news"> Daftar Peminjam</a>
  <a href="#contact">Data Peminjam</a>
  <!-- <a href="#about">About</a> -->
</div>
        <div class="navbar__right">
          <a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </a>
          <a href="#">
            <img width="30" src="assets/avatar2.png" alt="" />
            <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
          </a>
        </div>
      </nav>
      <main>

      </main>
      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="img/Logo.png" alt="logo" />
            <h1>Rental PS</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-building-o"></i>
            <a href="register.php">register</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-briefcase"></i>
            <a href="#">Paygrade</a>
          </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="#">Log in</a>
          </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="#">Log out</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script src="js/main.js"></script>
</body>
</html>