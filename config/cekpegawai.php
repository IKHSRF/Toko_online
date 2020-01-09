<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}

//cek level user
if($_SESSION['level']!="anggota"){
    die("Maaf !! Anda bukan Pegawai");
}
?>