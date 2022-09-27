<?php
function titleBarang($title)
{
    $kalimat = $title;
    $jumlahkarakter = 35;
    $cetak = substr($kalimat, $jumlahkarakter, 1);
    if ($cetak != " ") {
        while ($cetak != " ") {
            $i = 1;
            $jumlahkarakter = $jumlahkarakter + $i;
            $kalimat = $title;
            $cetak = substr($kalimat, $jumlahkarakter, 1);
        }
    }
    $cetak = substr($kalimat, 0, $jumlahkarakter);
    return "$cetak ...";
}
function add($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = connect();
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $deskription  = htmlspecialchars($data["deskription"]);
    $img = htmlspecialchars($data["img"]);
    $genre = htmlspecialchars($data["genre"]);
    $penulis = htmlspecialchars($data["penulis"]);


    // query insert data
    $query = "INSERT INTO buku
              VALUES
              (null, '$title', '$deskription', '$img', '$genre', '$penulis');
              ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function change_post($data)
{
    $conn = connect();
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $deskription  = htmlspecialchars($data["deskription"]);
    $img = htmlspecialchars($data["img"]);
    $genre = htmlspecialchars($data["genre"]);
    $penulis = htmlspecialchars($data["penulis"]);

    // query insert data
    $query = "UPDATE buku SET
              title = '$title',
              deskription = '$deskription',
              img = '$img',
              genre = '$genre',
              penulis = '$penulis'
            WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
function delete($id)
{
    $conn = connect();

    $mhs = query("SELECT * FROM buku WHERE id = $id");

    mysqli_query($conn, "DELETE FROM buku WHERE id = $id ") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
