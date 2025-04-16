<?php
include 'header.php';
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
                                            <li class="breadcrumb-item active">FORM INPUT DATA ANGGOTA</li>
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
                                            <h4 class="header-title">From Input Data anggota</h4>
                                            <p class="card-title-desc">Silahkan isi form dibawah ini untuk menambahkan anggota baru gor badminton politeknik meta</p>
                                            <form action="tambah-anggota.php" method="POST">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" placeholder="Masukkan email anda" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama" placeholder="Masukkan nama anda" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">No. Whatsapp</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="wa" placeholder="Masukkan No anda" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">alamat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="alamat" placeholder="Masukkan alamat anda" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2">
                                
                                </div>
                                <div class="col-sm-10">
                                    <input type="submit" name="add" value="Simpan Data" class="btn btn-primary waves-effect waves-light"/>
                                </div>
                                
                            
                            </div>
            </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
<?php
include 'footer.php';
?>