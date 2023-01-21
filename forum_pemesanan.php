<?php
require 'db/function.php';

if (isset($_POST["submit"])) {
    if (peminjaman($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil dimasukkan');
            document.location.href= 'dashboard_user.html';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'forum_input_data.php';
        </script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPATU</title>
    <link rel="icon" href="ps1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style_pemesanan.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="ps1.jpg" class="logo">
            <nav>
                <ul>
                    <li><a href="index.html">Log out</a></li>
                    <li><a href="forum_pemesanan.html">pemesanan</a></li>
                    <li><a href="tampilan.html">barang</a></li>
                </ul>
            </nav>
        </div>
        <div class="pesan">
            <form action="" method="post" enctype="multipart/form-data">
                <h1 class="pemesanan">Masukan data peminjaman</h1>
                <ul>
                    <li>
                        <label for="username">username :</label>
                        <input type="text" name="username" id="username" required>
                    </li>
                    <li>
                        <label for="waktu_peminjaman">waktu &ensp;&ensp;&ensp;&ensp; :&ensp;&ensp;&ensp;&ensp;</label>
                        <select class="user_type" name="waktu_peminjaman" id="waktu_peminjaman">
                            <option value="1jam">1 jam</option>
                            <option value="2jam">2 jam</option>
                            <option value="3jam">3 jam</option>
                            <option value="4jam">4 jam</option>
                            <option value="5jam">5 jam</option>
                        </select>
                    </li>
                    <li>
                        <label for="ps">&ensp;playstasion &ensp;&ensp;&ensp;&ensp; :&ensp;&ensp;&ensp;&ensp;</label>
                        <select class="user_type" name="ps" id="ps">
                            <option value="playstasion 1 Rp.3000/Jam">playstasion 1 Rp.3000/Jam</option>
                            <option value="playstasion 2 Rp.5000/Jam">playstasion 2 Rp.5000/Jam</option>
                            <option value="playstasion 3 Rp.8000/Jam">playstasion 3 Rp.8000/Jam</option>
                            <option value="playstasion 4 Rp.10000/Jam">playstasion 4 Rp.10000/Jam</option>
                            <option value="playstasion 5 Rp.15000/Jam">playstasion 5 Rp.15000/Jam</option>
                        </select>
                    </li>
                    <!-- <li>
                        <label for="harga">Harga :</label>
                        <input class="harga" type="text" name="harga" id="harga">
                    </li> -->
                    <li>
                        <button type="submit" name="submit">Tambah Data</button>
                    </li>
                </ul>

            </form>

        </div>




</body>

</html>