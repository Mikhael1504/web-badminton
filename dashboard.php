<?php
include 'header.php';
include 'config.php';

$sqlanggota = 'SELECT * FROM anggota';
$queryanggota = mysqli_query($db, $sqlanggota);
$jumlah_anggota = mysqli_num_rows($queryanggota);
?>

<div class="page-content">
  <!-- start page title -->
  <div class="page-title-box">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-6">
          <div class="page-title">
            <h4>Dashboard</h4>
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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

        <!-- Card: Anggota Aktif -->
        <div class="col-lg-6 col-md-12 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <p class="font-size-16">anggota aktif</p>
                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                  <span class="avatar-title rounded-circle bg-soft-primary">
                    <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                  </span>
                </div>
                <h5 class="font-size-22"><?php echo $jumlah_anggota; ?></h5>
              </div>
            </div>
          </div>
        </div>

        <!-- Card: Riwayat Penyewaan -->
        <div class="col-lg-6 col-md-12 mb-4">
          <?php
          $conn = new mysqli("localhost", "root", "", "badminton");

          if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
          }

          $query = "SELECT id, nama_anggota, jam_sewa, jam_akhir FROM sewa";
          $result = $conn->query($query);

          if (!$result) {
            die("Query gagal: " . $conn->error);
          }
          ?>

          <div class="card h-100">
            <div class="card-body">
              <h4 class="header-title mb-4">Riwayat penyewaan</h4>
              <ul class="list-unstyled activity-wid mb-0">
                <?php
                while ($sewa = $result->fetch_assoc()) {
                  echo '<li class="activity-list activity-border mb-3">';
                  echo '<div class="activity-icon avatar-sm">';
                  echo '<img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle" alt="">';
                  echo '</div>';
                  echo '<div class="media">';
                  echo '<div class="me-3">';
                  echo '<h5 class="font-size-15 mb-1">' . htmlspecialchars($sewa['nama_anggota']) . '</h5>';
                  echo '<p class="text-muted font-size-14 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> ' . htmlspecialchars($sewa['jam_sewa']) . '</p>';
                  echo '</div>';
                  echo '<div class="media-body">';
                  echo '<p class="text-muted font-size-13 mb-0"><b>ID:</b> ' . htmlspecialchars($sewa['id']) . '</p>';
                  echo '<div class="text-end d-none d-md-block">';
                  echo '<p class="text-muted font-size-13 mt-2 pt-1 mb-0"> jam berakhir</p>';
                  echo '<p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> ' . htmlspecialchars($sewa['jam_akhir']) . '</p>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</li>';
                }
                ?>
              </ul>
            </div>
          </div>
        </div>

      </div> <!-- end row -->
    </div> <!-- end page-content-wrapper -->
  </div> <!-- end container-fluid -->
</div> <!-- end page-content -->

<?php include 'footer.php'; ?>
