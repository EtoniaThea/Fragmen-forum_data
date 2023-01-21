<?php
use LDAP\Result;

$db = mysqli_connect("localhost", "root", "", "rental");


function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;

    }
    return $rows;
}

function peminjaman($data)
{
    global $db;

    $username = htmlspecialchars($data["username"]);
    $waktu_peminjaman = htmlspecialchars($data["waktu_peminjaman"]);
    $ps = htmlspecialchars($data["ps"]);
    $keterangan = htmlspecialchars($data["keterangan"]);


    $query = "INSERT INTO peminjaman
    VALUES
    ('', '$username', '$waktu_peminjaman', '$ps', '$keterangan' )
    ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM peminjaman WHERE id = $id");

    return mysqli_affected_rows($db);
}

function hapus_pengguna($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM users WHERE id = $id");

    return mysqli_affected_rows($db);
}
function cari($keyword)
{
    $query = "SELECT * FROM peminjaman 
            WHERE
            username LIKE '%$keyword%' OR
            waktu LIKE '%$keyword%' OR
            playstasion LIKE '%$keyword%'
            ";
    return query($query);
}

function edit($data)
{
    global $db;

    $id = $data["id"];
    $username = htmlspecialchars($data["username"]);
    $waktu_peminjaman = htmlspecialchars($data["waktu_peminjaman"]);
    $ps = htmlspecialchars($data["ps"]);

    $query = "UPDATE peminjaman SET
                username = '$username', 
                waktu_peminjaman = '$waktu_peminjaman', 
                ps = '$ps'
                WHERE id = $id
                ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
