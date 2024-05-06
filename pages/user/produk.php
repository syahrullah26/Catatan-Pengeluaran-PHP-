<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Produk</li>
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
              <div class="col-md-4">
                <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="title">Korek Api</h1>
                  <p class="card-text">4/5 <i class="bi bi-star-fill"></i></p>  
                  <h3 class="card-text text-primary">Rp.10.000</h3>
                  
              <!-- Multi Columns Form -->
              <form class="row g-3">
                <div class="col-md-2 mb-4">
                  <label for="inputCity" class="form-label">Kuantitas</label>
                </div>
                <div class="col-md-8 mb-4">
                <input class="form-control" type="number" id="quantity" name="quantity" min="1" max="5"> <!-- max kuantitas produk yang ada di db -->
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Masukan Keranjang</button>
                  <button type="reset" class="btn btn-secondary">Beli Sekarang</button>
                </div>
              </form><!-- End Multi Columns Form -->
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-2">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                </div>
                <div class="col-md-10 mt-4">
                    <h3>Nama Toko<h3>
                    <a href="index.php?page=toko"><buton class="btn btn-primary"> kunjungi toko</button></a>
                </div>
            </div>


        </div>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-12 mt-4">
                    <h3>Deskripsi Produk<h3>
                    <h5 class="card-text"></h5>
                    <P Class="card-text">korek api tahan 2000 tahun bro aman ada pengamanan anti maling nya pula mantap poko</p>
                </div>
            </div>


        </div>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-12 mt-4">
                    <h3>Ulasan Produk<h3>
                    <h5 class="card-text"></h5>
                    <input name="ulasan" type="text" class="form-control" id="ulasan" placeholder="masukan ulasan">
                    <div class="col-md-12 mt-2">
                        <div>
                        <label for="customRange2" class="form-label">Rating</label>
                        <input type="range" class="form-range" min="0" max="5" step="1" id="rating" data-bs-original-title="Masukan Rating 1-5" data-bs-placement="top" data-bs-toggle="tooltip">
                        </div>
                    </div>
                    <button class="btn btn-primary form-control mt-3 mb-3" type="submit">Submit</button>

                </div>
            </div>


        </div>

        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-2 mt-4">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                </div>
                <div class="col-md-10 mt-4">
                    <h5 class="card-title">Nama Pengulas</h5>
                    <p class="card-text">Rating : 4/5 <i class="bi bi-star-fill"></i></p>
                    <p class="cart-text"> ulasaan produk blablabla</p>
                </div>
            </div>


        </div>
  </section>

  </main><!-- End #main -->
</body>