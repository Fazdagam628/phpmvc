<?php
class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

        $this->db->bind('id', $id);
        return $this->db->single();
    }
    // private $mhs = [
    //     [
    //         "nama" => "Dani Ramdani",
    //         "nrp" => "173040023",
    //         "email" => "fazfagam628@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Erik fesdvxc",
    //         "nrp" => "173040024",
    //         "email" => "fazfagam628@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "doni Doank",
    //         "nrp" => "173040024",
    //         "email" => "fazfagam628@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "fajar Doank",
    //         "nrp" => "173040024",
    //         "email" => "fazfagam628@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "ganes Doank",
    //         "nrp" => "173040024",
    //         "email" => "fazfagam628@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];


}
