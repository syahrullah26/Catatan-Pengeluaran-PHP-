<script>
    $(document).ready(function() {
    $('#data').DataTable();
    } );
  </script>
<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Catatan Pengeluaran</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Pengeluaran</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <div class="row col-lg-14">
        <div class="card col-lg-14">
            <div class="card-body ">
              <h5 class="card-title">Select Filter</h5>
              <!-- Form Filter -->
            <!-- Form Filter Range Tanggal -->
              <form method="POST" action="">
                <div class="col-lg-14 mb-3">
                  <label for="filterTanggalMulai" for="tanggal" class="form-label" >Mulai Tanggal:</label>
                  <input type="date" class="form-control" id="filterTanggalMulai" name="filterTanggalMulai" required>
                </div> 
                <div class="col-lg-14 mb-3">
                  <label for="filterTanggalAkhir" class="form-label">Akhir Tanggal:</label>
                  <input type="date" class="form-control" id="filterTanggalAkhir" name="filterTanggalAkhir" required>
                <!-- Form Filter Jenis Kebutuhan -->
                  <div class="col-lg-14 mb-3">
                      <label for="filterJenisKebutuhan" class="form-label">Jenis Kebutuhan:</label>
                      <select class="form-select" id="filterJenisKebutuhan" name="filterJenisKebutuhan">
                          <option value="">Semua</option>
                          <option value="kecantikan">Kecantikan</option>
                          <option value="pangan">Pangan</option>
                          <option value="pakaian">Pakaian</option>
                          <option value="kosan">Kosan</option>
                          <option value="kesehatan">Kesehatan</option>
                          <option value="other">Other</option>
                          <!-- Tambahkan opsi jenis kebutuhan lainnya sesuai dengan kebutuhan Anda -->
                      </select>
                  </div>
                  <!-- End Form Filter Jenis Kebutuhan -->
  
                </div class="col-lg-4 ">
                <button type="submit" name="filterSubmit" class="btn btn-primary">Filter</button>
                </div>
              </form>
            <!-- End Form Filter Range Tanggal -->
            
<!-- End Form Filter -->
    <!-- Table with stripped rows -->
    <table class="table table-striped table-sm datatable" id="data">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Kuantitas</th>
          <th scope="col">Total Harga</th>
          <th scope="col">Jenis Kebutuhan</th>
          <th scope="col">Lainnya</th>
        </tr>
      </thead>
      <tbody>
      <?php
include_once 'includes/koneksi.php';

// Inisialisasi rentang tanggal
$filterTanggalMulai = isset($_POST['filterTanggalMulai']) ? $_POST['filterTanggalMulai'] : '';
$filterTanggalAkhir = isset($_POST['filterTanggalAkhir']) ? $_POST['filterTanggalAkhir'] : '';
// Inisialisasi jenis kebutuhan
$filterJenisKebutuhan = isset($_POST['filterJenisKebutuhan']) ? $_POST['filterJenisKebutuhan'] : '';

// Query SQL dengan kondisi filter rentang tanggal dan jenis kebutuhan
$sql = "SELECT * FROM pengeluaran WHERE 1=1";
if (!empty($filterTanggalMulai) && !empty($filterTanggalAkhir)) {
    $sql .= " AND tanggal BETWEEN '$filterTanggalMulai' AND '$filterTanggalAkhir'";
}
if (!empty($filterJenisKebutuhan)) {
    $sql .= " AND jenis_kebutuhan = '$filterJenisKebutuhan'";
}

$result = mysqli_query($konek, $sql);

$no = 0;
$totalKeseluruhan = 0; // Inisialisasi variabel total keseluruhan

while ($data = mysqli_fetch_assoc($result)) {
    $no += 1;

    // Menghitung total keseluruhan
    $totalKeseluruhan += $data['total_harga'];

    // ... (bagian pengulangan lainnya)
?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['tanggal']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td>Rp. <?php echo number_format( $data['harga'],2,',','.'); ?></td>
    <td><?php echo $data['kuantitas']; ?></td>
    <td>Rp. <?php echo number_format($data['total_harga'], 2, ',', '.'); ?></td>
    <td><?php echo $data['jenis_kebutuhan']; ?></td>
    <td><?php echo $data['lainnya']; ?></td>
</tr>
<?php
}

// Tampilkan baris tambahan untuk total keseluruhan
?>
<tr>
    <td colspan="5"></td>
    <td><strong>Total Keseluruhan:</strong></td>
    <td></td>
    <td><strong><?php echo 'Rp ' . number_format($totalKeseluruhan, 2, ',', '.'); ?></strong></td>
</tr>
<?php
?>

      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>