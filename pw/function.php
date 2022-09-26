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
