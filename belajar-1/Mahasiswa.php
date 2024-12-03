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
    public function tampilkanIdentitasDasar() {
        echo "Nama: " . $this->nama . "\n";
        echo "Alamat: " . $this->alamat . "\n"; 
        echo "Umur: " . $this->umur . "\n";
    }

    public function tampilkanIdentitasDenganKelamin($jenisKelamin) {
        echo "Nama: " . $this->nama . "\n";
        echo "Alamat: " . $this->alamat . "\n";
        echo "Umur: " . $this->umur . "\n";
        echo "Jenis Kelamin: " . $jenisKelamin . "\n";
    }

    public function tampilkanIdentitasDenganKontak($noHp, $email) {
        echo "Nama: " . $this->nama . "\n";
        echo "Alamat: " . $this->alamat . "\n";
        echo "Umur: " . $this->umur . "\n";
        echo "No HP: " . $noHp . "\n";
        echo "Email: " . $email . "\n";
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

    // override method
    public function tampilkanIdentitas() {
        echo "Nama Mahasiswa  : " . $this->nama . "\n";
        echo "Alamat Mahasiswa: " . $this->alamat . "\n";
        echo "Umur Mahasiswa: " . $this->umur . "\n";
    }
    
}
