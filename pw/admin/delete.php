<?php
require 'db.php';
require 'function.php';
$id = $_GET['id'];

if (delete($id) > 0) {
    echo "<script>
          alert('data berhasil dihapus');
          document.location.href = './admin.php?page=post';
        </script>";
} else {
    echo "data gagal diubah!";
}
