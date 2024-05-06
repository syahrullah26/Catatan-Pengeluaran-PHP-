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
        <div class="col-xl-16">

        <div class="card">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#dikemas">Dikemas</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dikirim">Dikirim</button>
            </li>
            </ul>
            <div class="tab-content pt-2">
            <div class="tab-pane fade show active dikemas" id="dikemas">
                <h5 class="card-title">Pesanan Dikemas</h5>

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
            <div class="tab-content pt-2">
            <div class="tab-pane fade show active dikirim" id="dikirim">
                <h5 class="card-title">Pesanan Dikirim</h5>

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
                <center><button class="btn btn-primary">Pesanan Diterima</button><center>

              </div>
            </div><!-- End Card with an image on top -->
            <?php } ?>
            </div>

  </section>

  </main><!-- End #main -->
</body>