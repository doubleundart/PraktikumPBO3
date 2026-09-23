<?php
 
class Mahasiswa
{
    public $nama;
    public $nim;
    public $jurusan;
 
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
 
    public function getInfo()
    {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
 
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
}
 
$mhs1 = new Mahasiswa("Budi Santoso", "20240001", "Sistem Informasi");
$mhs2 = new Mahasiswa("Ani Wijaya", "20240002", "Teknik Informatika");
 
echo $mhs1->getInfo() . "<br>";
echo $mhs2->getInfo() . "<br>";
 
$mhs1->setJurusan("Manajemen Informatika");
echo $mhs1->getInfo() . "<br>";
?>