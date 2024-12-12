<?php

// parent class atau induk class
class Identitas {
    // atribut
    protected $nama;
    protected $alamat; 
    protected $umur;
    protected $jenisKelamin;
    protected $noHp;
    protected $email;

    // constructor
    public function __construct($nama, $alamat, $umur, $jenisKelamin, $noHp, $email) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->umur = $umur;
        $this->jenisKelamin = $jenisKelamin;
        $this->noHp = $noHp;
        $this->email = $email;
    }

    // method
    public function tampilkanIdentitas() {
        echo "Nama: " . $this->nama . "\n";
        echo "Alamat: " . $this->alamat . "\n"; 
        echo "Umur: " . $this->umur . "\n";
        echo "Jenis Kelamin: " . $this->jenisKelamin . "\n";
        echo "No HP: " . $this->noHp . "\n";
        echo "Email: " . $this->email . "\n";
    }
}

?>
