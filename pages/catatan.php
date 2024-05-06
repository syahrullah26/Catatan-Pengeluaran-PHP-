<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Catatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->



</div>
    <section id="works"></section>
  <div class="container"  style="width: 100%; background-color:#FDEDFF;">
    <div class="row centered mt mb">


  </div>
  <div class="col-md-12   mb ">
  <div class="card " style="background-image: linear-gradient(to bottom right,  #800C92, #EEC8F1)">
      <div class="card-header centered ">
        <h1 class="text-mono text-center text-dark">Data Pemesanan</h1>
      </div>
    </div>
    </div>
      <br>
  <div class="col-sm-12">

    <form role="form" action="pages/proses.php" method="POST">
     <div class="form-group">
     <label class="centered">Nama Pemesan</label>
  <input name="nama" type="text" class="form-control " placeholder="Masukan Nama Pemesan" value="" required/><br>

      <div class="centered"></div>
      <label class="centered">Tanggal</label>
      <input name="tanggal" type="date" class="form-control"  required /><br>
  <label class="centered">Jumlah Pesanan</label>
  <input name="kuantitas" type="number" class="form-control " placeholder="Jumlah Pesanan/pcs" value="" required/><br>
     
             <div class="text-center">
                              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                              <button type="reset" class="btn btn-danger"name="reset">Reset</button>
                            </div>
         </div>
    </form>

    </main><!-- End #main -->
</body>