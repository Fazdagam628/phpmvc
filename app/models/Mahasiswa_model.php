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

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES(:nama, :nrp, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
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