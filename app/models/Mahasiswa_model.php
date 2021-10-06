<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Asep Muhiban",
    //         "nrp" => "193040142",
    //         "e-mail" => "193040142@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, '', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM Mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>