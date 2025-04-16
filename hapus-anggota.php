<?php
include ("config.php");

if ( isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "DELETE FROM anggota WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('location: anggota.php?status=hapus');
    } else {
        header('location: anggota.php?status=gagalhapus');
    }
} else {
    die("tidak memiliki akses");
}
?>