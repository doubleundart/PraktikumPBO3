<?php
 
class Product {
    private $nama;
    private $harga;
    private $stok;
 
    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
 
    public function getInfo() {
        return "Produk: $this->nama<br>" .
               "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>" .
               "Stok: $this->stok unit<br>";
    }
 
    public function kurangStok($jumlah) {
        if ($jumlah <= $this->stok) {
            $this->stok -= $jumlah;
            return true;
        }
        return false;
    }

    public function getStok() {
        return $this->stok;
    }
}
 
$produk = new Product("Laptop Asus", 12000000, 10);
echo $produk->getInfo();
 
if ($produk->kurangStok(3)) {
    echo "Pembelian berhasil! Stok tersisa: " . $produk->getStok() . "<br>";
}
else {
    echo "Stok tidak mencukupi!<br>";
}

?>