<?php

function connect()
{
    return mysqli_connect("localhost", "root", "", "prakweb_a_203040017_pw");
}

function query($query)
{
    $connect = connect();
    $result = mysqli_query($connect, $query);

    // jika hasilnya hanya satu data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
