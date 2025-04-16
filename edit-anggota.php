<?php
include 'header.php';
include 'config.php';

if( !isset($_GET['id']) ){
    header('Location: anggota.php');
}

$id = $_GET['id'];


$sql = "SELECT * FROM anggota WHERE id=$id";
$query = mysqli_query($db, $sql);
$anggota = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ) {
    die("Data Tidak Ditemukan");
}

?>

                <div class="page-content">
                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title">
                                    <h4>ANGGOTA</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">anggota</a></li>
                                            <li class="breadcrumb-item active">FORM UPDATE DATA ANGGOTA</li>
                                        </ol>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- end page title -->    
                    <div class="container-fluid">
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">From update Data Buku</h4>
                                            <p class="card-title-desc">Silahkan isi form dibawah ini untuk update data anggota baru di sistem Meta Library</p>
                                            <form action="proses-anggota.php" method="POST">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" placeholder="Masukkan email" id="example-text-input" value="<?php echo $anggota['email'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama" placeholder="Masukkan nama" id="example-text-input" value="<?php echo $anggota['nama'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">No. whatsapp</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="wa" placeholder="Masukkan whatsapp Anda" id="example-text-input" value="<?php echo $anggota['wa'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">alamat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="alamat" placeholder="Masukkan alamat" id="example-text-input" value="<?php echo $anggota['alamat'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2">
                                
                                </div>
                                <div class="col-sm-10">
                                    <input type="submit" name="edit" value="edit Data" class="btn btn-primary waves-effect waves-light"/>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $anggota['id'] ?>" />
                        </form>
                                            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                            

<?php
include 'footer.php';
?>