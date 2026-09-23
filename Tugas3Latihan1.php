<?php

class Mobil {
    private $merek;
    private $warna;
    private $kecepatan;
 
    public function __construct($merek, $warna, $kecepatan = 0) {
        $this->merek = $merek;
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }
 
    public function getMerek() {
        return $this->merek;
    }
 
    public function getWarna() {
        return $this->warna;
    }
 
    public function getKecepatan() {
        return $this->kecepatan;
    }
 
    public function setKecepatan($kecepatan) {
        if ($kecepatan < 0) {
            throw new Exception("Kecepatan tidak boleh negatif!");
        }
        if ($kecepatan > 200) {
            throw new Exception("Kecepatan maksimal 200 km/jam!");
        }
        $this->kecepatan = $kecepatan;
    }
 
    public function setWarna($warna) {
        if (empty($warna)) {
            throw new Exception("Warna tidak boleh kosong!");
        }
        if (strlen($warna) < 3) {
            throw new Exception("Warna minimal 3 karakter!");
        }
        $this->warna = $warna;
    }
 
    public function getInfo() {
        return "Mobil " . $this->merek . " berwarna " . $this->warna .
               ", kecepatan " . $this->kecepatan . " km/jam";
    }
}

try {
    $mobil1 = new Mobil("Toyota Avanza", "Putih", 80);
    echo $mobil1->getInfo() . "<br>";
 
    $mobil1->setKecepatan(150);
    echo "Kecepatan baru: " . $mobil1->getKecepatan() . " km/jam<br>";
 
    $mobil1->setWarna("Merah");
    echo $mobil1->getInfo() . "<br><br>";
 
    $mobil1->setKecepatan(250);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
 
try {
    $mobil2 = new Mobil("Honda Civic", "Hi", 60);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
?>