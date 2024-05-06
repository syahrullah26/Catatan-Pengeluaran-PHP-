<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Keranjang Belanja</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Keranjang</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
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
                    <th scope="col">Action</th>

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
                    <td ><button class="btn btn-primary"><i class="bi bi-cart-check-fill"></i></button>
                        <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->
              </section>

</main><!-- End #main -->
</body>