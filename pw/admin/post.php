<?php
require 'db.php';
require 'function.php';
$buku = query("SELECT * FROM buku");
?>
<div style="padding: 16px;">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0;
                    foreach ($buku as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i + 1 ?></th>
                            <td><?= $row["title"]; ?></td>
                            <td><?= $row["genre"]; ?></td>
                            <td><?= $row["penulis"]; ?></td>
                            <td>
                                <ul class="list-group list-group-horizontal">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="">
                                                <button type="button" class="btn btn-primary btn-sm">Change</button>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="">
                                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                            </a>
                                        </li>
                                    </ul>
                                </ul>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>