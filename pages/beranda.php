<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-16">
          <div class="row">
          <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-2 mt-3 ">
                <img src="assets/img/ayang.jpg" width="80%" height="80%" alt="Profile" class="rounded-circle">
                </div>
                <div class="col-md-8 mt-3">
                    <h3 class="card-text" >Galuh Anjani Garnisaputri<h3>
                              <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-toggle="modal" data-target="#myModal"><i class="bi bi-plus-circle-fill"></i> Add Funds</a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Funds <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                      $sql = mysqli_query($konek," SELECT * FROM saldo ");
                      while($data = mysqli_fetch_assoc($sql)){
                        $saldo=$data['saldo'];
                        $id=$data['id_saldo'];
                      }

                      ?>
                      <h6>Rp. <?php echo number_format($saldo) ; ?> </h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <!-- Modal -->
            <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title"><b>Add Funds</b></h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <form class="row g-3" role="form" action="pages/saldo.php" method="POST">
                            <label for="saldoakhir" class="form-label">Your Funds</label>
                            <input type="hidden" name="id_produk" class="form-control" value="<?php echo $data['id_saldo']; ?>" >
                            <input type="text" class="form-control" id="saldoakhir" name="funds" value="Rp. <?php echo $saldo; ?>" readonly>
                            <label for="saldo" class="form-label">Add Funds</label>
                            <input type="text" class="form-control" id="saldo" name="saldo" placeholder="Masukan Saldo yang ingin ditambahakan" required>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="submit">Submit</button><!-- get id pemesanan -->
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>

              </div>
            </div><!-- End Card with an image on top -->

                </div>
            </div>
            <div class="col-lg-12 ">
          <div class="row">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Catatan Pengeluaran</h5>
  
                <!-- Default Tabs -->
                <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                  <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">INPUT</button>
                  </li>
                  <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">TABLE PENGELUARAN</button>
                  </li>
                </ul>
                <div class="tab-content pt-2" id="myTabjustifiedContent">
                  <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body">
                      <h5 class="card-title">Input <span> Pengeluaran</span></h5>
                      <div class="d-flex align-items-center">
                        <div class="col-md-12">
                          <!-- Multi Columns Form -->
                          <form class="row g-3" role="form" action="pages/proses.php" method="POST">
                            <div class="col-md-12">
                              <label for="inputName5" class="form-label">Nama</label>
                              <input type="text" class="form-control" id="inputName5" name="nama" placeholder="Masukan Nama Barang" required>
                            </div>
                            <div class="col-md-6">
                              <label for="kuantitas" class="form-label">Kuantitas</label>
                              <input type="number" class="form-control" id="kuantitas" min="1" value="1" name="kuantitas" required>
                            </div>
                            <div class="col-md-6">
                              <label for="harga" class="form-label">Harga</label>
                              <input type="number" class="form-control" id="harga" min="0" step="500" name="harga" required>
                            </div>
                            <div class="col-md-2">
                              <label for="tanggal" class="form-label">Tanggal</label>
                              <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                            <div class="col-md-4">
                              <label for="jenis_pengeluaran" class="form-label">Jenis Pengeluaran</label>
                              <select id="jenis_pengeluaran" name="jenis_kebutuhan" class="form-select">
                                <option selected value="0">Choose...</option>
                                <option value="1">Kecantikan</option>
                                <option value="2">Pangan</option>
                                <option value="3">Pakaian</option>
                                <option value="4">Kosan</option>
                                <option value="5">Kesehatan</option>
                                <option value="6">Other</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="lainnya" class="form-label">Catatan Lainnya</label>
                              <input type="text" class="form-control" id="lainnya" name="lainnya" placeholder="Masukan Nama Kebutuhan (optional)">
                            </div>
                            <div class="col-12">
                              <div class="form-check">
                                </label>
                              </div>
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                              <button type="reset" class="btn btn-danger" name="reset">Reset</button>
                            </div>
                          </form><!-- End Multi Columns Form -->
                
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card-body">
                      <h5 class="card-title">Catatan <span> Pengeluaran</span></h5>
                      <p class="card-text">Seluruh pengeluaran Galuh Anjani terhitung dari sistem Ini dibuat ,<b>1 Februari 2024</b></p>
    
                      <div class="d-flex align-items-center">
                        <div class="col-md-12">
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
                          
                          $result = mysqli_query($konek, ("SELECT * FROM pengeluaran"));

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
                    </div>
                  </div>

  </section>

  </main><!-- End #main -->
</body>