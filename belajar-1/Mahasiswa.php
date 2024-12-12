<?php
require_once 'Identitas.php';

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

    public function tampilkanIdentitas() {
        echo "Nama: " . $this->getNama() . "\n";
        echo "Alamat: " . $this->getAlamat() . "\n";
        echo "Umur: " . $this->getUmur() . "\n";
        echo "Jenis Kelamin: " . $this->jenisKelamin . "\n";
        echo "No HP: " . $this->getNoHp() . "\n";
        echo "Email: " . $this->email . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Jurusan: " . $this->getJurusan() . "\n";
        echo "Fakultas: " . $this->fakultas . "\n";
    }
}

?>
