<?php 
include 'header.php';
include 'config.php';
?>
<script>
        function confirmDelete(id){
          const confirmAction = confirm("apakah anda yakin ingin menghapus data anggota ini?");
          if (confirmAction){
            window.location.href = "hapus-anggota.php?id=" + id;
          }
        }
</script>




        <div class="page-content">
          <!-- start page title -->
          <div class="page-title-box">
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-sm-6">
                  <div class="page-title">
                    <h4>ANGGOTA</h4>
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Morvin</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">anggota</a>
                      </li>
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
                            <?php if(isset($_GET['status'])): ?>
                                  <?php
                                      if($_GET['status'] == 'tambah'){
                                          echo "   <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                  Data berhasil ditambahkan!        
                                      </div>";
                                        }
                                        elseif($_GET['status'] == 'edit'){
                                          echo "   <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                      Data berhasil diedit!        
                                          </div>";
                                        }
                                        elseif($_GET['status'] == 'hapus'){
                                          echo "   <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                      Data berhasil dihapus!        
                                          </div>";
                                        }
                                        elseif($_GET['status'] == 'gagaledit') {
                                            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                    Data Gagal Diedit!        
                                        </div>";
                                        }
                                        elseif($_GET['status'] == 'gagalhapus') {
                                          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                      Data Gagal Dihapus!        
                                          </div>";
                                          }
                                        else {
                                          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                    Data Gagal Ditambahkan!        
                                        </div>";
                                        }
                                      ?>
                <?php endif; ?>
                                <div class="row">
                                <div class="col-md-8">
                                <h4 class="header-title">data anggota</h4>
                                <p class="card-title-desc">SELAMAT DATANG DI GOR BADMINTON POLITEKNIK META INDUSTRI
                                </p>
                                </div>
                                <div class="col-md-4" style="text-align: right;">
                                    <a href="add-anggota.php" class="btn btn-info">
                                        <i class="fa fa-plus"> input data anggota</i>
                                    </a>
                                </div>
                            </div>
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Nama Anggota</th>
                                        <th>No. Whatsapp</th>
                                        <th>Alamat</th>
                                        <th>aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $sql = "SELECT * FROM anggota";
                                      $query = mysqli_query($db, $sql);
                                      while($anggota = mysqli_fetch_assoc($query)){
                                        echo "<tr>";
                                        echo "<td>".$anggota['id']."</td>";
                                        echo "<td>".$anggota['email']."</td>";
                                        echo "<td>".$anggota['nama']."</td>";
                                        echo "<td>".$anggota['wa']."</td>";
                                        echo "<td>".$anggota['alamat']."</td>";
                                        echo "<td>";
                                        echo "<a href='edit-anggota.php?id=".$anggota['id']."' class='btn btn-warning waves-light'><i class='fa fa-pencil-alt'></i></a>";
                                        echo"&nbsp;";
                                        echo "<a onclick='confirmDelete(".$anggota['id'].")' class='btn btn-danger waves-effect'><i class='fa fa-trash-alt'></i></a>";
                                        "</td>";
                                        echo "<tr>";
                                      }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
              </div>
            </div>

<?php
include 'footer.php';
?>
