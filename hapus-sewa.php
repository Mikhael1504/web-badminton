<?php
include ("config.php");

if ( isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "DELETE FROM sewa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('location: sewa.php?status=hapus');
    } else {
        header('location: sewa.php?status=gagalhapus');
    }
} else {
    die("tidak memiliki akses");
}
?>