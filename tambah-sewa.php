<?php
include("config.php");

if(isset($_POST['addd'])){

     // ambil data dari form
    $nama_anggota = $_POST['nama_anggota'];
    $jam_sewa = $_POST['jam_sewa'];
    $jam_akhir = $_POST['jam_akhir'];

    // buat query 
    $sql = "INSERT INTO sewa (nama_anggota, jam_sewa, jam_akhir) VALUE ('$nama_anggota', '$jam_sewa', '$jam_akhir')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman peminjaman.php dengan status=sukses
        header('Location: sewa.php?status=tambah');
    } else {
        // kalau gagal alihkan ke halaman buku.php dengan status=gagal
        header('Location: sewa.php?status=gagaltambah');
    }

} else {
    die("Tidak Memiliki Akses...");
}

?>