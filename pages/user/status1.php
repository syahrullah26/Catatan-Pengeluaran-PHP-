<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Akun Saya</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Akun Saya</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<section class="section profile">
      <div class="row">
        <div class="col-xl-16">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Riwayat Pesanan</button>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                    <?php 
            for ($i=1;$i<=10;$i++){
              ?>
              <!-- Card with an image on top -->
            <div class="card col-xxl-2 col-md-4 ms-4">
              <img src="assets/img/card.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="index.php?page=produk"><h5 class="card-title" align="center">Korek Api</h5></a>
                <p class="card-text" align="center">Rp.10.000</p>
                <p class="card-text" align="center">5</p>
                <p class="card-text" align="center">Rp.50.000</p>
                <p class="card-text" align="center">di kemas</p>

              </div>
            </div><!-- End Card with an image on top -->
            <?php } ?>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Oxva">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="phone" type="text" class="form-control" id="phone" value="08123456789">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="email" value="oxva@gmail.com">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="address" value="Jl.Raya Telang">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <div class="card">
                        <div class="card-body">
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Kuantitas</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            for($i=1;$i<=10;$i++){?>
                            <tr>
                                <th scope="row"><?php echo $i ;?></th>
                                <td>Korek Api</td>
                                <td>1</td>
                                <td>10.000</td>
                                <td>10.000</td>
                                <td>selesai</td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    </main><!-- End #main -->
</body>