<?php

include("config.php");

// cek apakah tombol edit sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama_anggota = $_POST['nama_anggota'];
    $jam_sewa = $_POST['jam_sewa'];
    $jam_akhir = $_POST['jam_akhir'];

    // buat query update
    $sql = "UPDATE sewa SET nama_anggota='$nama_anggota', jam_sewa='$jam_sewa', jam_akhir='$jam_akhir' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman buku.php
        header('Location: sewa.php?status=edit');
    } else {
        // kalau gagal tampilkan pesan
        header('Location: sewa.php?status=gagaledit');
    }


} else {
    die("Tidak Memiliki Akses");
}

?>  