<?php
require 'db.php';
require 'function.php';

// cek apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {


    // cek apakah data berhasil di tambahkan atau tidak
    if (add($_POST) > 0) {
        echo "
              <script>
                  alert('data berhasil ditambah')
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
        <input type="hidden" name="id">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="deskription" class="form-label">Deskription</label>
            <textarea class="form-control" name="deskription" id="deskription" rows="3">

            </textarea>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" class="form-control" id="img">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" id="genre">
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" id="penulis">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>