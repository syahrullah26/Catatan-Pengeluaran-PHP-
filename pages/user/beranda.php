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