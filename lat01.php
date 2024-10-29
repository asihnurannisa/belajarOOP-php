<?php

class mahasiswa{
    var $nama;
    var $kelas;
    var $npm;
    var $tugas;
    
    function tampilkan_nama($nama){
        return "Nama saya " . $nama . "<br/>";
    }
    
    function tampilkan_kelas($kelas){
        return "Kelas saya " . $kelas . "<br/>";
    }
    function tampilkan_npm($npm){
        return "Npm saya " . $npm . "<br/>";
    }
    function tampilkan_tugas($tugas){
        return "Tugas " . $tugas . "<br/>";
    }
}

$mahasiswa = new mahasiswa();

echo $mahasiswa->tampilkan_nama("Nisa");
echo $mahasiswa->tampilkan_kelas("MI 3C");
echo $mahasiswa->tampilkan_npm("23753088");
echo $mahasiswa ->tampilkan_tugas("Pemograman Web");
?>
