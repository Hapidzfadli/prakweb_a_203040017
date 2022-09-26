<?php
require 'db.php';
require 'function.php';
$buku = query("SELECT * FROM buku");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beli Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h2>DAFTAR BUKU</h2>
    <div class="d-flex flex-row" style="padding: 20px;">
        <div class="row">
            <?php foreach ($buku as $row) : ?>
                <div class="col-md-2">
                    <div class="card mb-3" style="width: 14rem; height: 33.6rem;">
                        <img style="height: 15.6rem;" src="<?= $row["img"]; ?>" class="card-img-top" alt="<?= $row["title"]; ?>">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?= $row["title"]; ?></h5>
                            <p class="font-monospace" style="color: grey;"><em><?= $row["penulis"]; ?></em></p>
                            <p class="font-monospace"><?= $row["genre"]; ?></p>
                            <p class="card-text fs-6"><?php echo titleBarang($row["deskription"]); ?>
                            </p>
                            <div class="position-absolute" style="bottom: 20px">
                                <a href="/"><button type="button" class="btn btn-primary btn-sm">Details</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>