<?php
require 'function.php';

$id = $_GET["id"];

if( hapus_pengguna ($id) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'forum_data_pengguna.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'forum_data_pengguna.php';
    </script>
    ";
}
?>