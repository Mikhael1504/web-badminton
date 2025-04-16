<?php
include("config.php");

if (isset($_POST['add'])) {

    // ambil data dari form
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $wa = $_POST['wa'];
    $alamat = $_POST['alamat'];

    // buat query 
    $sql = "INSERT INTO anggota (email, nama, wa, alamat) VALUE ('$email', '$nama', '$wa', '$alamat')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman buku.php dengan status=sukses
        header('Location: anggota.php?status=tambah');
    } else {
        // kalau gagal alihkan ke halaman buku.php dengan status=gagal
        header('Location: anggota.php?status=gagaltambah');
    }
} else {
    die("Tidak Memiliki Akses...");
}
