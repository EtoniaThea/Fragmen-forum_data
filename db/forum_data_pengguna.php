<?php
//koneksi ke database
require 'function.php';



$users = query("SELECT * FROM users");

if (isset($_POST["cari"])) {
  $users = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form_input.css">

  <title>Admin Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    .topnav {
      overflow: hidden;
      background-color: #808080;
      border-radius: 20px;

    }

    .topnav a {
      float: left;
      color: #f2f2f2;
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
      background-color: #2c2e30;
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
        <a href="forum_input_data.php">Daftar Peminjam</a>
        <a href="forum_data.php">Data Peminjam</a>
        <a href="forum_data_pengguna.php">Data users</a>
        <!-- <a href="#about">About</a> -->
      </div>
      <!-- <div class="navbar__left">
          <a href="#">Data Peminjam</a>
          <a href="#">Daftar peminjaman</a>
          <a class="active_link" href="#">Admin</a>
        </div> -->
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
    </nav> <!-- bagian isi -->
    <div class="table">
      <h1>data Pengguna</h1>
      <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyyword pencarian" autocomplete="off">
        <button type="submit" name="cari">cari!</button>
        <form action="" method="post">
          <table border="1" cellpadding="10" cellspacing="0"">

                    <tr class=" hieght">
            <th>no.</th>
            <th>nama </th>
            <th>username </th>
            <th>password</th>
            <th>users_type</th>
            <th>tombol</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($users as $row) : ?>
              <tr>
                <td>
                  <?= $i; ?>
                </td>
                <td>
                  <?= $row["nama"]; ?>
                </td>
                <td>
                  <?= $row["username"]; ?>
                </td>
                <td>
                  <?= $row["password"]; ?>
                </td>
                <td>
                  <?= $row["users_type"]; ?>
                </td>
                <td>
                  <a href="hapus_pengguna.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>

          </table>
        </form>

    </div>

    <!-- isi selesai -->

    <div id="sidebar">
      <div class="sidebar__title">
        <div class="sidebar__img">
          <img src="Logo.png" alt="logo" />
          <h1>Rental PS</h1>
        </div>
        <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
      </div>

      <div class="sidebar__menu">
        <div class="sidebar__link active_menu_link">
          <i class="fa fa-home"></i>
          <a href="#">Dashboard</a>
        </div>
        <!-- <h2>MNG</h2> -->
        <!-- <div class="sidebar__link">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <a href="forum_data.php">Admin Management</a> -->
      </div>
      <div class="sidebar__link">
        <i class="fa fa-building-o"></i>
        <a href="register.php">register</a>
      </div>
      <!-- <div class="sidebar__link">
            <i class="fa fa-wrench"></i>
            <a href="#">Employee Management</a>
          </div> -->
      <!-- <div class="sidebar__link">
            <i class="fa fa-archive"></i>
            <a href="#">Warehouse</a>
          </div> -->
      <!-- <div class="sidebar__link">
            <i class="fa fa-handshake-o"></i>
            <a href="#">Contracts</a>
          </div> -->
      <!-- <h2>LEAVE</h2>
          <div class="sidebar__link">
            <i class="fa fa-question"></i>
            <a href="#">Requests</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-sign-out"></i>
            <a href="#">Leave Policy</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-calendar-check-o"></i>
            <a href="#">Special Days</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-files-o"></i>
            <a href="#">Apply for leave</a>
          </div>
          <h2>PAYROLL</h2>
          <div class="sidebar__link">
            <i class="fa fa-money"></i>
            <a href="#">Payroll</a>
          </div> -->
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