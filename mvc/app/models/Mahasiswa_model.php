<?php
class Mahasiswa_model
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=prakweb_a_203040017_mvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // private $mhs = [
    //     [
    //         "nama" => "Hapid Fadli",
    //         "nrp" => "203040017",
    //         "email" => "hapidzfadli@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Hapid Fadli",
    //         "nrp" => "203040017",
    //         "email" => "hapidzfadli@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];
}
