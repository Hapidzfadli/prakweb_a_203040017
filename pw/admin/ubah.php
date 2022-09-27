<?php
require 'db.php';
require 'function.php';
$id = $_GET['id'];

$buku = query("SELECT * FROM buku where id = $id");
// cek apakah tombol sudah ditekan atau belum
if (isset($_POST["ubah"])) {


    // cek apakah data berhasil di tambahkan atau tidak
    if (change_post($_POST) > 0) {
        echo "
              <script>
                  alert('data berhasil diubah')
                  document.location.href = './admin.php?page=post';
              </script>
          ";
    } else {
        echo "alert('data gagal diubah';";
    }
}

?>

<div style="padding: 16px;" class="ubah-data">
    <form style="width: 75%;" action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $buku["id"]; ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="<?= $buku['title']; ?>">
        </div>
        <div class="mb-3">
            <label for="deskription" class="form-label">Deskription</label>
            <textarea class="form-control" name="deskription" id="deskription" rows="3">
            <?= $buku['deskription']; ?>
            </textarea>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" class="form-control" id="img" value="<?= $buku['img']; ?>">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" id="genre" value="<?= $buku['genre']; ?>">
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" id="penulis" value="<?= $buku['penulis']; ?>">
        </div>
        <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
    </form>
</div>