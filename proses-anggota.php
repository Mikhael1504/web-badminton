<?php

include("config.php");

// cek apakah tombol edit sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $wa = $_POST['wa'];
    $alamat = $_POST['alamat'];

    // buat query update
    $sql = "UPDATE anggota SET email='$email', nama='$nama', wa='$wa', alamat='$alamat' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman buku.php
        header('Location: anggota.php?status=edit');
    } else {
        // kalau gagal tampilkan pesan
        header('Location: anggota.php?status=gagaledit');
    }


} else {
    die("Tidak Memiliki Akses");
}

?>  