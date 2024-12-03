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
    }
}

// child class atau turunan class
class Mahasiswa extends Identitas {
    private $nim;
    private $jurusan;
    private $fakultas;

    public function __construct($nama, $alamat, $umur, $jenisKelamin, $noHp, $email, $nim, $jurusan, $fakultas) {
        parent::__construct($nama, $alamat, $umur, $jenisKelamin, $noHp, $email);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->fakultas = $fakultas;
    }

    // setter methods
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function setNoHp($noHp) {
        $this->noHp = $noHp;
    }

    // getter methods
    public function getNama() {
        return $this->nama;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function getNoHp() {
        return $this->noHp;
    }
}

?>
