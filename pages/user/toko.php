<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Toko</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-16">
          <div class="row">
            <!-- Card with an image on left -->
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-2">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                </div>
                <div class="col-md-6 mt-4">
                    <h3 class="card-text" >Nama Toko<h3>
                    <p class="card-title">deskripsi toko</p>
                </div>
                <div class="col-md-2 mt-1">
                    <p class="card-text" >produk</p>
                    <p class="card-text">Bergabung</p>
                    <p class="card-text">Contact</p>
                </div>
                <div class="col-md-2 mt-1">
                    <p class="card-text" >: 10</p>
                    <p class="card-text">: 4 Tahun Lalu</p>
                    <p class="card-text">: <a href="#">08129423456</a></p>
                </div>
            </div>


        </div>
        <div class="card mb-3">
            <div class="row g-0">
                <!-- Left side columns -->
        <div class="col-lg-16">
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
                <p class="card-text" align="center">4/5 <i class="bi bi-star-fill"></i></p>
                <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Lihat Produk</button></center>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title"><b>Korek Api</b></h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <img src="assets/img/card.jpg" class="card-img-top"  alt="...">
                          <a href="index.php?page=produk"><h5 class="card-title" align="center">Korek Api</h5></a>
                          <p class="card-text" style="text-align : justify;">korek api tahan 2000 tahun bro aman ada pengamanan anti maling nya pula mantap poko</p>
                          <p class="card-text" align="center">Rp.10.000</p>
                          <p class="card-text" align="center">4/5 <i class="bi bi-star-fill"></i></p>
                        </div>
                        <div class="modal-footer">
                          <a href="index.php?page=produk"><button type="button" class="btn btn-primary">pesan</button></a><!-- get id pemesanan -->
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </div><!-- End Card with an image on top -->
            <?php } ?>
  </section>

  </main><!-- End #main -->
</body>